<?php
/**
 * trait we can use in any class
 *
 * suppose you have a common class/ function which need to use for every class
 * for this case we an use triat
 * and we can call [use trait name ]
 */

trait hello
{
    public function syaHello()
    {
        echo "Hello Everyone!";
    }
}

class Derived
{
    use hello;
}

class Derived_1
{
    use hello;
}

$test = new Derived(); // 1 object 
$test->syaHello(); // Hello Everyone!
$test1 = new Derived_1(); //  2 object
$test1->syaHello(); // Hello Everyone!
