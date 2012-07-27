# Install PHPUnit as a Git checkout (without PEAR)

The installation happens locally, so there's no need for root access. If you follow
the instructions below, then `~/local/phpunit` will be your installation directory.
Furthermore, if you like to install different version, edit fetch.php.

    cd $HOME/local
    git clone https://github.com/kblomqvist/gitinstall-phpunit.git phpunit
    cd phpunit
    make install
    ./phpunit.php --version
    
---

You may like to create a symlink to `phpunit.php` script file

    cd ~/bin # or whatever directory that's in your PATH
    ln -s ~/local/phpunit/phpunit.php phpunit

Now you can just call phpunit at any directory and without the `.php` suffix, like this

    cd # go home
    phpunit --version