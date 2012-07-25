# Install PHPUnit as a Git checkout

    git clone https://github.com/kblomqvist/gitinstall-phpunit.git $HOME/local/phpunit
    make install
    ./phpunit.php --version

You may like to create a symlink to `phpunit.php`

    cd ~/bin # or whatever is in your path
    ln -s ~/local/phpunit/phpunit.php phpunit