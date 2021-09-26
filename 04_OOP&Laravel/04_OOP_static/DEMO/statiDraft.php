<?php

// class Storage
// {

//     static public $data;

//     public function getData()
//     {
//         echo self::$data;
//     }
// }

// Storage::$data = 'My Data';

// echo Storage::$data;

class StringParser
{

    static public $string = null;


    static public function setString($data)
    {

        self::$string = $data;
    }

    static public function getString()
    {

        return self::$string;
    }

    static public function length()
    {
        return strlen(self::$string);
    }

    static public function getStrExample($end)
    {
        return substr(self::$string, 0, $end) . '...';
    }
}

StringParser::setString('Lorem Ipsum Ibudoloris');
$output = StringParser::getString();
echo $output;
$length = StringParser::length();
echo $length;

$substr = StringParser::getStrExample(7);
echo $substr;
