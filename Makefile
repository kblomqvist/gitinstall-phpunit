install:
	php fetch.php
	sed -i '1d' phpunit/phpunit.php
	sed -i "s=__DIR__='$PWD'=g" phpunit.php
	chmod +x phpunit.php

clean:
	rm -rf php-* phpunit-* phpunit dbunit
	sed -i "s='$PWD'=__DIR__=g" phpunit.php
	chmod -x phpunit.php