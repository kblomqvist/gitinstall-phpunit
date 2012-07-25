# Install PHPUnit as a Git checkout

    cd $HOME/local/phpunit
    git clone https://github.com/kblomqvist/gitinstall-phpunit.git phpunit
    make install
    ./phpunit.php --version

You may like to create a symlink to `phpunit.php`

    cd ~/bin # or whatever is in your path
    ln -s ~/local/phpunit/phpunit.php phpunit