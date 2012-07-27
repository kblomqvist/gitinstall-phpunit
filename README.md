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

    $ ./phpunit.php --version
    PHPUnit @package_version@ by Sebastian Bergmann.
    
Note that the version is `@package_version@` because the PHPUnit wasn't build but checked from Git.

### Optional step. Create symlink

    cd ~/bin # or whatever directory that's in your PATH
    ln -s phpunit.php phpunit

Now you can just call phpunit at any directory and without the `.php` suffix, like this

    cd # go home
    phpunit --version