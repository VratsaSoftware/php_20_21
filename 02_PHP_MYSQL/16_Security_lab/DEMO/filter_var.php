<?php
// for filters that accept options, use this format
$options = array(
    'options' => array(
        'default' => 3, // value to return if the filter fails
        // other options here
        'min_range' => 0
    ),
    'flags' => FILTER_FLAG_ALLOW_OCTAL,
);
// $var = filter_var('0755', FILTER_VALIDATE_INT, $options);

// for filters that only accept flags, you can pass them directly,  FILTER_NULL_ON_FAILURE-returns NULL on failure
$var = filter_var('oops', FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE);

// for filters that only accept flags, you can also pass as an array
$var = filter_var('oops', FILTER_VALIDATE_BOOLEAN,array('flags' => FILTER_NULL_ON_FAILURE));

var_dump($var);

