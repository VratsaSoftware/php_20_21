<?php 
$a = 10;
$b = 63;
$c = 15;

function get_triangle_type( $a, $b, $c){
	if (($a+$c < $b)||($a+$b<$c)||($b+$c<$a)) {
        echo "Niama takuv triugulnikn";
    } else {
        if ( ($a==$b) && ($b==$c))  {
            echo "Triugulnikut e ravnostranen";
        } elseif ( ($a==$b)||($b==$c)||($a==$c) ) {
            echo "Triugulnikut e ravnobedren";
        } elseif( $a!=$b && $a!=$c && $b!= $c ) {
            echo "Triugulnikut e raznostranen";
        }
    }
}

get_triangle_type( $a, $b, $c);