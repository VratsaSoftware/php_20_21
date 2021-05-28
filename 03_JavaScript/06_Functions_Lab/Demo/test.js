let arr = [1,2,3,4,5,6,7,8];

// for(let i = 0; i < arr.length; i++){
//     console.log(arr);
// }
//

arr.forEach( function(element, index) {

        arr[index] = Math.pow(element, 2);
    }
);

let result = arr.map(function(index, elem) {
    return Math.pow(elem, 2);
})

console.log(result);
