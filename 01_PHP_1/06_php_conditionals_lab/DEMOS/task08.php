<?php 

//a b c
//a c b
//b a c
//b c a
//c a b
//c b a

if( $a < $c  && $c < $b ){
	echo "$a, $c, $b";
} 

if( $a < $b && $b < $c){
	echo "$a, $b, $c";
}

if( $b < $a && $a < $c ){
	echo "$b, $a, $c";
}
