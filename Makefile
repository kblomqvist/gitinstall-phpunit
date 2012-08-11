install:
	php fetch.php
	cp phpunit/phpunit.php phpunit/phpunit.php.old
	sed -i '1d' phpunit/phpunit.php
	sed -i "s=__DIR__='$$PWD'=g" phpunit.php
	chmod +x phpunit.php

clean:
	rm -rf php-* phpunit-* phpunit dbunit Symfony
	sed -i "s='$$PWD'=__DIR__=g" phpunit.php
	chmod -x phpunit.php
