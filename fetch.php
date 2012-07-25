<?php
/**
 * Fetch PHPUnit from GitHub
 *
 * Usage:
 *   php fetch.php
 */

$packages = array(
	'3.4.15' => array(
		'github' => array(
			'sebastianbergmann/phpunit' => '3.4.15',
			'sebastianbergmann/dbunit' => 'master',
			'sebastianbergmann/php-file-iterator' => '1.2.6',
			'sebastianbergmann/php-text-template' => 'master',
			'sebastianbergmann/php-code-coverage' => '1.0.5',
			'sebastianbergmann/php-token-stream' => '1.0.1',
			'sebastianbergmann/php-timer' => 'master',
			'sebastianbergmann/phpunit-mock-objects' => 'master',
			'sebastianbergmann/phpunit-selenium' => 'master',
			'sebastianbergmann/phpunit-story' => 'master',
			'sebastianbergmann/php-invoker' => 'master'
		),
	)
);

function trimPackageName($type, $package)
{
	switch ($type) {
		case "github":
			$package = strstr($package, '/');
			$package = substr($package, 1);
			break;
	}
	return $package;
}

function fetch(array $packages)
{
	foreach ($packages['github'] as $repo => $tag) {
		exec("git clone https://github.com/$repo.git");
		if ($tag != "master") {
			$repo = trimPackageName('github', $repo);			
			exec("cd $repo && git checkout -b $tag");
		}
	}
}

$version = '3.4.15';
fetch($packages[$version]);