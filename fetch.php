<?php
/**
 * Fetch PHPUnit from GitHub
 *
 * Usage:
 *   php fetch.php
 */

$packages = array(
	'3.4.15' => array(
		'sebastianbergmann/phpunit'              => array('3.4.15', 'phpunit'),
		'sebastianbergmann/dbunit'               => array('master', 'dbunit'),
		'sebastianbergmann/php-file-iterator'    => array('1.2.6', 'php-file-iterator'),
		'sebastianbergmann/php-text-template'    => array('master', 'php-text-template'),
		'sebastianbergmann/php-code-coverage'    => array('1.0.5', 'php-code-coverage'),
		'sebastianbergmann/php-token-stream'     => array('1.0.1', 'php-token-stream'),
		'sebastianbergmann/php-timer'            => array('master', 'php-timer'),
		'sebastianbergmann/phpunit-mock-objects' => array('master', 'phpunit-mock-objects'),
		'sebastianbergmann/phpunit-selenium'     => array('master', 'phpunit-selenium'),
		'sebastianbergmann/phpunit-story'        => array('master', 'phpunit-story'),
		'sebastianbergmann/php-invoker'          => array('master', 'php-invoker'),
		'symfony/Yaml'                           => array('master', 'symfony-components/Symfony/Component/Yaml'),
		'symfony/Finder'                         => array('master', 'symfony-components/Symfony/Component/Finder')
	),
	'3.6.12' => array(
		'sebastianbergmann/phpunit'              => array('3.6.12', 'phpunit'),
		'sebastianbergmann/dbunit'               => array('master', 'dbunit'),
		'sebastianbergmann/php-file-iterator'    => array('master', 'php-file-iterator'),
		'sebastianbergmann/php-text-template'    => array('master', 'php-text-template'),
		'sebastianbergmann/php-code-coverage'    => array('master', 'php-code-coverage'),
		'sebastianbergmann/php-token-stream'     => array('master', 'php-token-stream'),
		'sebastianbergmann/php-timer'            => array('master', 'php-timer'),
		'sebastianbergmann/phpunit-mock-objects' => array('master', 'phpunit-mock-objects'),
		'sebastianbergmann/phpunit-selenium'     => array('master', 'phpunit-selenium'),
		'sebastianbergmann/phpunit-story'        => array('master', 'phpunit-story'),
		'sebastianbergmann/php-invoker'          => array('master', 'php-invoker'),
		'symfony/Yaml'                           => array('master', 'symfony-components/Symfony/Component/Yaml'),
		'symfony/Finder'                         => array('master', 'symfony-components/Symfony/Component/Finder')
	)
);

function fetch(array $packages)
{
	foreach ($packages as $repo => $tag) {
		passthru("git clone https://github.com/$repo.git $tag[1]");
		if ($tag[0] != 'master') {
			passthru("cd $tag[1] && git checkout -b $tag[0]");
		}
	}
}

$version = '3.6.12';
fetch($packages[$version]);