# Install PHPUnit as a Git checkout

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

    $ ./phpunit.php --version
    PHPUnit @package_version@ by Sebastian Bergmann.
    
Note that the version is `@package_version@` because the PHPUnit wasn't build but checked from Git. To test the installation even further you may like to run PHPUnit selftest suite. Here's the trick to do that

    $ cd $HOME/local/phpunit # just in case you got lost
    $ cd phpunit
    $ ln -s ../Symfony
    $ ./phpunit.php.old

Again you will see few unharmful errors because the PHPUnit wasn't build but checked from Git (or at least I assume this to be the case;). If you got an error `Class PEAR_RunTest not found` then you have not installed PHP with PEAR. And yes, PHPUnit is not completely PEAR free. Unfortunately.

### Optional step. Create symlink

    cd ~/bin # or whatever directory that's in your PATH
    ln -s phpunit.php phpunit

Now you can just call phpunit at any directory and without the `.php` suffix, like this

    cd # go home
    phpunit --version