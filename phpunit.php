#!/usr/bin/env php
<?php
/**
 * Runs PHPUnit from a Git checkout
 *
 * Usage:
 *   chmod +x phpunit.php
 *   ./phpunit.php
 */

$dirs = array_filter(scandir("."), "is_dir");
unset($dirs[0], $dirs[1]);
$path = get_include_path() . PATH_SEPARATOR . implode(PATH_SEPARATOR, $dirs);
set_include_path($path);

include("phpunit/phpunit.php");
