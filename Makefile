PHPUNIT_VERSION=3.7.10

install: clean
	php fetch.php $(PHPUNIT_VERSION)
	cp phpunit/phpunit.php phpunit/phpunit.php.old
	sed -i '1d' phpunit/phpunit.php
	sed -i "s=\$$PWD='$$PWD'=" phpunit.sh

clean:
	rm -rf php-* phpunit-* phpunit dbunit symfony-components
	sed -i "s='$$PWD'=\$$PWD=" phpunit.sh
