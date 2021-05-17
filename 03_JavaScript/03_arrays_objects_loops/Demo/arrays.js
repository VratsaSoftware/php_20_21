// var arr = [
//             1,
//             'Hello',
//             new Date(),
//             ['Orange','Bannana'],
//             2,
//             ,
//             function printFullName(firstName,lastName){
//                 console.log(firstName + ' ' +lastName);
//             },
//             {},
//         ];
// var multiDimArray = [];
//
// // console.log( arr, typeof(arr));
// console.log(arr[6]('Ivan','Ivanov'));
//
// multiDimArray = [
//     ['0,0','0,1','0,2'],
//     ['1,0','1,1','1,2'],
//     ['2,0','2,1','2,2'],
// ];
//
// console.log(multiDimArray[1][1]);
var arr = [1,2,3,4,5,6];
var arrLength = arr.length;
// var arr2 = new Array(1,2,3,4,5,6);
// var arr3 = new Array(5);
// console.log (arr,arr2,arr3);
//arr.push(7,8,9); // add elements to end of array
// console.log(arr);

//var lastElementOfArr = arr.pop();
// console.log(lastElementOfArr);
// console.log(arr);

//arr.unshift(-2,-1, 0);

//var firstElementOfArr = arr.shift();
// console.log(firstElementOfArr);
console.log(arr);

//task 1 reverse order Array
arrReversed = [];
for (let i = 0; i < arrLength; i++){
    arrReversed.unshift(arr.shift());
}
console.log(arrReversed);
