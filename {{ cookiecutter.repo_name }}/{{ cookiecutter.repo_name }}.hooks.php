<?php
/**
 * Hooks for {{ cookiecutter.repo_name }} extension
 *
 * @file
 * @ingroup Extensions
 */

class {{ cookiecutter.repo_name }}Hooks {

	{% if cookiecutter.integration_add_example_parser_hook == 'y' -%}
	public static function onParserFirstCallInit( Parser &$parser ) {
		$parser->setFunctionHook( 'something', '{{ cookiecutter.repo_name }}Hooks::doSomething' );
	}

	public static function doSomething( Parser &$parser )
	{
		// Called in MW text like this: {{#something: }}

		// For named parameters like {{#something: foo=bar | apple=orange | banana }}
		// See: https://www.mediawiki.org/wiki/Manual:Parser_functions#Named_parameters

		return "This text will be shown when calling this in MW text.";
	}{% endif %}
}
