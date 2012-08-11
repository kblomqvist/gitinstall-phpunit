install:
	php fetch.php
	cp phpunit/phpunit.php phpunit/phpunit.php.old
	sed -i '1d' phpunit/phpunit.php
	sed -i "s=\$$PWD='$$PWD'=" phpunit.sh

clean:
	rm -rf php-* phpunit-* phpunit dbunit symfony-components
	sed -i "s='$$PWD'=\$$PWD=" phpunit.sh
