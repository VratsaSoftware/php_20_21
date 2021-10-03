<?php

class Main
{
    public static $name = __CLASS__;

    public static function printClassName()
    {

        // echo self::$name;
        echo static::$name;

        return true;
    }
}

// Main::printClassName();

class Second extends Main
{
    public static $name = __CLASS__;
}


// Second::printClassName();

class Test
{
    const CONSTPROP = 'Test Const';

    public function getConst()
    {

        echo self::CONSTPROP . ' from instance';
    }
}

echo Test::CONSTPROP;

$newInstance = new Test;

$newInstance->getConst();
