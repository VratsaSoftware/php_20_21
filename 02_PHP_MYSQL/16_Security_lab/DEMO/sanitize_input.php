<?php
$smaller = "not a tag < 5  pp p p p p";
$script_tags = "<script>alert(1)</script>";
//makes difference depending on context
// echo strip_tags( $smaller );    // -> not a tag < 5
// echo strip_tags( $script_tags ); 
// //doesn`t make difference
echo filter_var ( $smaller, FILTER_SANITIZE_STRING ); // -> not a tag
echo filter_var ( $script_tags, FILTER_SANITIZE_STRING ); 

// echo $script_tags;