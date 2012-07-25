install:
	php < fetch.php
	sed -i '1d' phpunit/phpunit.php
	chmod +x phpunit.php

clean:
	rm -rf php-* phpunit-* phpunit dbunit
	chmod -x phpunit.php