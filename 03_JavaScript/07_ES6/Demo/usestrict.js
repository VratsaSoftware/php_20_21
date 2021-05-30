"use strict";

var x = 5;
var y = 7;

var string1 = 'Lorem ipsum example';
var string2 = "Ipsum fsfsdfsdfsd lorem";
var literalExample =
    `
    <div>
        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
            Excepteur sint occaecat cupidatat non proident,
            sunt in culpa qui officia deserunt mollit anim id est laborum. ${x+y}
        </p
    </div>
    `;
console.log(literalExample);

//
// function printA(){
//
//     var a = 'Hello';
//     console.log(a);
// }
//
// printA();
//
// function sumValues(a,a){
//     console.log(a+a);
// }
