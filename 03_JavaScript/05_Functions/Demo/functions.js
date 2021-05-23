// declaration
// function rectangleArea(a,b){
//     console.log(a,b);
//     let area = a*b;
//     console.log(area);
//     return area;
// }
// //
// rectangleArea();

// function example(){
//     console.log(arguments);
// }
//
// example(5,6,7,'str');

//expression
// var rectangleArea = function(a,b){
//     console.log(a,b);
//     let area = a*b;
//     console.log(area);
//     return area;
// };
//
rectangleArea(4,5);

//iife
(function() {
    let a = 5;
    let b = 6;
    console.log(a+b+5);

}());
