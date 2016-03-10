# {{ cookiecutter.repo_name }}

{{ cookiecutter.description }}

## Features

{% if cookiecutter.integration_add_example_special_page == 'y' %} * [Special page](https://www.mediawiki.org/wiki/Manual:Special_pages) (specials/SpecialHelloWorld.php){% endif %}
{% if cookiecutter.integration_add_example_parser_hook == 'y' %} * [Parser hook](https://www.mediawiki.org/wiki/Manual:Parser_functions) ({{ cookiecutter.repo_name }}/{{ cookiecutter.repo_name }}.hooks.php){% endif %}
{% if cookiecutter.integration_add_gerrit == 'y' %} * [Gerrit integration](https://www.mediawiki.org/wiki/Gerrit) (.gitreview){% endif %}

## Development on Linux (OS X anyone?)
To take advantage of this automation, use the Makefile: `make help`. To start,
run `make install` and follow the instructions.

## Development on Windows
Since you cannot use the `Makefile` on Windows, do the following:

  # Install nodejs, npm, and PHP composer
  # Change to the extension's directory
  # npm install
  # composer install

Once set up, running `npm test` and `composer test` will run automated code checks.
