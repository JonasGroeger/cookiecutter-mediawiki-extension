# Used elements
# http://marmelab.com/blog/2016/02/29/auto-documented-makefile.html
# http://unix.stackexchange.com/questions/217295/phony-all-rules-in-gnu-make-file

.DEFAULT_GOAL := help

.PHONY: install
install: _npm _composer  ## Updates PHP / JS dependencies
	@npm install
	@composer install

.PHONY: update
update: _npm _composer ## Updates PHP / JS dependencies (writes composer.lock)
	@npm update
	@composer update

# See https://www.mediawiki.org/wiki/Continuous_integration/Entry_points
.PHONY: test
test: _npm _composer ## Runs tests (see composer.json / Gruntfile.js)
	@npm test
	@composer test

fix: _phpcbf
	@vendor/bin/phpcbf

################################################################################
_COMPOSER := $(shell composer -V)
_NPM := $(shell npm -v)
_PHPCBF := $(shell vendor/bin/phpcbf --version)

_npm:
ifndef _COMPOSER
	@printf "You can get npm @ https://nodejs.org/en/download/\n"
endif

_composer:
ifndef _NPM
	@printf "You can get composer @ https://getcomposer.org/\n"
endif

_phpcbf:
ifndef _PHPCBF
	@printf "Please run composer install first\n"
endif

.PHONY: help
help:
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[36m%-10s\033[0m %s\n", $$1, $$2}'
