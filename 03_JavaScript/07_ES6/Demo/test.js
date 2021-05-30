
// function test(){
//     let b = 2;
//     const c = 3;
//     function func1(){
//         let d = 7;
//         console.log(b,c);
//     }
//     function func2(){
//         console.log(b,c,d);
//     }
//     func1();
//     func2();
// }
//
// test();
//let arr = [1,2,3,4,5,6,5,7,8,9,10];

// var largeThanFive = arr.find(
//     function(value,index){
//         return value > 5;
//     }
// );
//
// var largeThanFive = arr.findIndex(
//     function(value,index){
//         return value > 5;
//     }
// );
//
// var result = arr.findIndex(
//     function(value,index){
//         return value === 5;
//     }
// );
//
// console.log(result);
let animals = ['dog', 'eliphant', 'dog', 'bear', 'dog', 'cat'];
//
// function searchElement(value, arr){
//     let result = [];
//     for(let i = 0; i < arr.length; i++){
//         if(value === arr[i]){
//             result.push(i);
//         }
//     }
//     return result;
// }
//
// console.log(searchElement('dog',animals));
var index = animals.indexOf('dog');

while(index >= 0){
    if(index >=0){
        console.log(index);
    }
    index = animals.indexOf('dog',index+1)

}


// console.log(index);
