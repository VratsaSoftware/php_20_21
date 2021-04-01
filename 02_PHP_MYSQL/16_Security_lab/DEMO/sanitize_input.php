<?php
$smaller = "not a tag < 5";
$scrpt_tags = "<script>alert(1)</script>";
//makes difference depending on context
echo strip_tags( $smaller );    // -> not a tag < 5
echo strip_tags( $scrpt_tags ); 
//doesn`t make difference
echo filter_var ( $smaller, FILTER_SANITIZE_STRING ); // -> not a tag
echo filter_var ( $scrpt_tags, FILTER_SANITIZE_STRING ); 

// echo $scrpt_tags;