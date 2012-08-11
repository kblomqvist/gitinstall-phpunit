#!/bin/bash
SCRIPT_PATH=$PWD

PHP_INCLUDE_PATH=`php -r 'echo get_include_path();'`
PHP_INCLUDE_PATH+=":"
PHP_INCLUDE_PATH+=`ls -pd $SCRIPT_PATH/* | grep '/$' | sed -e :a -e N -e 's/\n/:/g' -e ta`

php -d include_path="$PHP_INCLUDE_PATH" $SCRIPT_PATH/phpunit/phpunit.php $*
