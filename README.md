# Install [PHPUnit](https://github.com/sebastianbergmann/phpunit/) as a Git checkout (without :pear:)

The installation happens locally and there's no need for root access.

The `~/local/phpunit` will be your installation directory, if you follow the instructions below step by step.

### Step 1. Decide the installation directory

```
$ cd $HOME/local # or where ever you want to install phpunit
```

### Step 2. Git clone this repo

```
$ git clone https://github.com/kblomqvist/gitinstall-phpunit.git phpunit
$ cd phpunit
```

### Step 3. Run make install

```
$ make install PHPUNIT_VERSION=3.7.10
```

### Step 4. Check that everything works

```
$ ./phpunit.sh --version
PHPUnit 3.7.10 by Sebastian Bergmann.
```

To test the installation even further you may like to run PHPUnit selftest.
Here's the trick how to do that

```
$ cd $HOME/local/phpunit # just in case you got lost
$ cd phpunit
$ ../phpunit.sh
```

If you are getting an error `Class PEAR_RunTest not found`, then you have not
installed PHP with PEAR. In this respect PHPUnit is not completely PEAR free.

### Step 5. Create symlink to phpunit.sh

```
$ cd ~/bin # or whatever directory, that is in your PATH
$ ln -s $HOME/local/phpunit/phpunit.sh phpunit
```

Now you can call phpunit just like any other program

```
$ phpunit --version
PHPUnit 3.7.10 by Sebastian Bergmann.
```

### Optional step 6. Just for fun

Let's try to run something big. For example, the test suite of
[Zend Framework 2](https://github.com/zendframework/zf2).

So first fetch ZF2 under your workspace

```
$ cd $HOME/workspace # or where ever you like to work on
$ git clone git://github.com/zendframework/zf2.git
$ cd zf2/tests
```

After then edit `run-tests.php` file and setup `$phpunit_bin` variable like this

```php
$phpunit_bin = getenv("HOME") . "/local/phpunit/phpunit.sh";
```

Now run the test suite

    $ ./run-tests.php

All test pass. Excellent!

## QA

Q: Why my PHPUnit version is _@package_version@_?  
A: That's the feature of the earlier versions of PHPUnit (<=3.6).
