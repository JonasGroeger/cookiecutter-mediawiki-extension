<?php

if ( function_exists( 'wfLoadExtension' ) ) {
	wfLoadExtension( '{{ cookiecutter.repo_name }}' );
	// Keep i18n globals so mergeMessageFileList.php doesn't break
	$wgMessagesDirs['{{ cookiecutter.repo_name }}'] = __DIR__ . '/i18n';
	{% if cookiecutter.integration_add_example_special_page == 'y' %}$wgExtensionMessagesFiles['{{ cookiecutter.repo_name }}Alias'] = __DIR__ . '/{{ cookiecutter.repo_name }}.i18n.alias.php';{% endif %}
	$wgExtensionMessagesFiles['{{ cookiecutter.repo_name }}Magic'] = __DIR__ . '/{{ cookiecutter.repo_name }}.i18n.magic.php';
	wfWarn(
		'Deprecated PHP entry point used for {{ cookiecutter.repo_name }} extension. Please use wfLoadExtension ' .
		'instead, see https://www.mediawiki.org/wiki/Extension_registration for more details.'
	);
	return true;
} else {
	die( 'This version of the {{ cookiecutter.repo_name }} extension requires MediaWiki 1.25+' );
}
