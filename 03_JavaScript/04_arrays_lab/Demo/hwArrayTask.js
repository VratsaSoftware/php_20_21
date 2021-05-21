let palindrome = [];
let arr = [];
let inputString = 'There is a man, his name was Bob. His favorite group is ABBA';

inputString = inputString.replace(/[.,]/g,'');

arr = inputString.split(' ');


for(let element of arr){
    if(element.toLowerCase() == element.split('').reverse().join('').toLowerCase()){
        palindrome.push(element);
    }
}

console.log(palindrome);
