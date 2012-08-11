# Install [PHPUnit](https://github.com/sebastianbergmann/phpunit/) as a Git checkout (without PEAR)

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
    
Note that the version is `@package_version@` because the PHPUnit wasn't build but checked from Git.

To test the installation even further you may like to run PHPUnit selftest. Here's the trick how to do that

    $ cd $HOME/local/phpunit # just in case you got lost
    $ cd phpunit
    $ ../phpunit.sh

Again you will see few unharmful errors because the PHPUnit wasn't build but checked from Git (or at least I assume this to be the case;). If you are getting an error `Class PEAR_RunTest not found`, then you have not installed PHP with PEAR. In this respect PHPUnit is not completely PEAR free.

### Optional step 5. Create symlink

    cd ~/bin # or whatever directory that's in your PATH
    ln -s $HOME/local/phpunit/phpunit.sh phpunit

Now you can call phpunit at any directory, just like any other program

    cd # go home
    phpunit --version

### Optional step 6. Just for fun

Let's try to run something big. For example, the test suite of [Zend Framework 2](https://github.com/zendframework/zf2).

    $ cd $HOME/workspace # or where ever you like to work on
    $ git clone git://github.com/zendframework/zf2.git
    $ cd zf2/tests

Edit `run-test.php` and setup `$phpunit_bin`

    $HOME = getenv("HOME");
    $phpunit_bin = "$HOME/local/phpunit/phpunit.sh";

Run the test suite

    $ ./run-test.php

All test pass. Excellent!