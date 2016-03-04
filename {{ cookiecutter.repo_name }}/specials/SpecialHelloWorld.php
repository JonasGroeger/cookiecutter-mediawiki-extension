{% if cookiecutter.integration_add_example_special_page == 'y' -%}
<?php
/**
 * HelloWorld SpecialPage for {{ cookiecutter.repo_name }} extension
 *
 * @file
 * @ingroup Extensions
 */

class SpecialHelloWorld extends SpecialPage {
	public function __construct() {
		parent::__construct( 'HelloWorld' );
	}

	/**
	 * Show the page to the user
	 *
	 * @param string $sub The subpage string argument (if any).
	 *  [[Special:HelloWorld/subpage]].
	 */
	public function execute( $sub ) {
		$out = $this->getOutput();

		$out->setPageTitle( $this->msg( '{{ cookiecutter.i18n_prefix }}-helloworld' ) );

		$out->addHelpLink( 'How to become a MediaWiki hacker' );

		$out->addWikiMsg( '{{ cookiecutter.i18n_prefix }}-helloworld-intro' );
	}

	protected function getGroupName() {
		return 'other';
	}
}
{% endif %}
