# Install PHPUnit as a Git checkout (without PEAR)

The installation happens locally, so there's no need for root access. If you follow
the instructions below, then `~/local/phpunit` will be your installation directory.
Furthermore, if you like to install different version, edit fetch.php.

### Step 1. Decide the installation directory

    $ cd $HOME/local # or where ever you want to install phpunit

### Step 2. Git clone this repo

    $ git clone https://github.com/kblomqvist/gitinstall-phpunit.git phpunit
    $ cd phpunit

### Step 3. Run make install

    $ make install

### Step 4. Check that everything works

    $ ./phpunit.sh --version
    PHPUnit @package_version@ by Sebastian Bergmann.
    
Note that the version is `@package_version@` because the PHPUnit wasn't build but checked from Git. To test the installation even further you may like to run PHPUnit selftest. Here's the trick how to do that

    $ cd $HOME/local/phpunit # just in case you got lost
    $ cd phpunit
    $ ../phpunit.sh

Again you will see few unharmful errors because the PHPUnit wasn't build but checked from Git (or at least I assume this to be the case;). If you are getting an error `Class PEAR_RunTest not found`, then you have not installed PHP with PEAR. In this respect PHPUnit is not completely PEAR free.

In case you are still wondering if this really works, try to run something big. For example, Zend Framework 2 test suite.

    $ cd $HOME/workspace # or where ever you like to work on
    $ git clone git://github.com/zendframework/zf2.git
    $ cd zf2/tests

Edit `run-test.php` and setup `$phpunit_bin`

    $HOME = getenv("HOME");
    $phpunit_bin = "$HOME/local/phpunit/phpunit.sh";

Run the test suite

    $ ./run-test.php

### Optional step. Create symlink

    cd ~/bin # or whatever directory that's in your PATH
    ln -s $HOME/local/phpunit/phpunit.sh phpunit

Now you can just call phpunit at any directory, just like any other program

    cd # go home
    phpunit --version
