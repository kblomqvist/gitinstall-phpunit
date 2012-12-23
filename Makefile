PHPUNIT_VERSION=master

install: clean
	php fetch_phpunit.php $(PHPUNIT_VERSION)
	cp phpunit/phpunit.php phpunit/phpunit.php.old
	sed -i '1d' phpunit/phpunit.php
	sed -i "s=\$$PWD='$$PWD'=" phpunit.sh

clean:
	rm -rf php-* phpunit-* phpunit dbunit symfony-components
	sed -i "s='$$PWD'=\$$PWD=" phpunit.sh
