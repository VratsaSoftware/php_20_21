<?php
require('Interfaces\iTest.php');


class Test implements iTest
{
    public function hello()
    {
        echo 'Hello from class';
    }

    public function foo($greeting)
    {
        echo $greeting;
    }

    public function bar()
    {
        echo 'foo';
    }
}


$test = new Test;

$test->hello();
$test->foo('VSO', 1);
$test->bar();
