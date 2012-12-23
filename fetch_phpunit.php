<?php
/**
 * Fetch PHPUnit from GitHub
 *
 * Usage:
 *   php fetch_phpunit.php [PHPUNIT_VERSION]
 */

$packages = array(
        'master' => array(
                'sebastianbergmann/phpunit'              => array('master', 'phpunit'),
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
                'symfony/Yaml'                           => array('v2.1.2', 'symfony-components/Symfony/Component/Yaml'),
                'symfony/Finder'                         => array('master', 'symfony-components/Symfony/Component/Finder')
        ),
        '3.7.10' => array(
                'sebastianbergmann/phpunit'              => array('3.7.10', 'phpunit'),
                'sebastianbergmann/dbunit'               => array('1.2.1', 'dbunit'),
                'sebastianbergmann/php-file-iterator'    => array('1.3.3', 'php-file-iterator'),
                'sebastianbergmann/php-text-template'    => array('1.1.4', 'php-text-template'),
                'sebastianbergmann/php-code-coverage'    => array('1.2.7', 'php-code-coverage'),
                'sebastianbergmann/php-token-stream'     => array('1.1.5', 'php-token-stream'),
                'sebastianbergmann/php-timer'            => array('1.0.4', 'php-timer'),
                'sebastianbergmann/phpunit-mock-objects' => array('1.2.2', 'phpunit-mock-objects'),
                'sebastianbergmann/phpunit-selenium'     => array('1.2.10', 'phpunit-selenium'),
                'sebastianbergmann/phpunit-story'        => array('master', 'phpunit-story'),
                'sebastianbergmann/php-invoker'          => array('1.1.2', 'php-invoker'),
                'symfony/Yaml'                           => array('v2.1.2', 'symfony-components/Symfony/Component/Yaml'),
                'symfony/Finder'                         => array('master', 'symfony-components/Symfony/Component/Finder')
        ),
        '3.6.12' => array(
                'sebastianbergmann/phpunit'              => array('3.6.12', 'phpunit'),
                'sebastianbergmann/dbunit'               => array('master', 'dbunit'),
                'sebastianbergmann/php-file-iterator'    => array('1.3.0', 'php-file-iterator'),
                'sebastianbergmann/php-text-template'    => array('1.1.1', 'php-text-template'),
                'sebastianbergmann/php-code-coverage'    => array('1.1.0', 'php-code-coverage'),
                'sebastianbergmann/php-token-stream'     => array('master', 'php-token-stream'),
                'sebastianbergmann/php-timer'            => array('1.0.1', 'php-timer'),
                'sebastianbergmann/phpunit-mock-objects' => array('1.1.0', 'phpunit-mock-objects'),
                'sebastianbergmann/phpunit-selenium'     => array('master', 'phpunit-selenium'),
                'sebastianbergmann/phpunit-story'        => array('master', 'phpunit-story'),
                'sebastianbergmann/php-invoker'          => array('1.1.0', 'php-invoker'),
                'symfony/Yaml'                           => array('v1.0.2', 'symfony-components/Symfony/Component/Yaml'),
                'symfony/Finder'                         => array('master', 'symfony-components/Symfony/Component/Finder')
        ),
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
                'symfony/Yaml'                           => array('v2.0.19', 'symfony-components/Symfony/Component/Yaml'),
                'symfony/Finder'                         => array('master', 'symfony-components/Symfony/Component/Finder')
        )
);

function fetch(array $packages)
{
	foreach ($packages as $repo => $tag) {
		passthru("git clone https://github.com/$repo.git $tag[1]");
		if ($tag[0] != 'master') {
			passthru("cd $tag[1] && git checkout tags/$tag[0]");
		}
	}
}

$version = isset($argv[1]) ? $argv[1] : "master";
if (!array_key_exists($version, $packages)) {
	echo "Usage: php $argv[0] [" . implode("|", array_keys($packages)) . "]\n";
	exit(1);
}
fetch($packages[$version]);

