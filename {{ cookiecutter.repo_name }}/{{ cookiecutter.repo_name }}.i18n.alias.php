{% if cookiecutter.integration_add_example_special_page %}
<?php
/**
 * Aliases for special pages of the {{ cookiecutter.repo_name }} extension
 *
 * @file
 * @ingroup Extensions
 */

$specialPageAliases = [];

/** English (English) */
$specialPageAliases['en'] = [
	'HelloWorld' => [ 'HelloWorld' ],
];
{% endif %}