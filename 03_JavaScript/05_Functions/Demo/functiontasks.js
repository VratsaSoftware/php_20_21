// Напишете функция, която приема два параметъра – числа и връща
// по-голямото от двете.
// function max(a,b){
//     if(a > b){
//         console.log(a);
//         return a;
//     }
//     if(b > a){
//         console.log(b);
//         return b;
//     }
// }
//
// Напишете функция, която връща последната цифра от дадено число
// като дума/на английски/.
// input output
// 512 two
// 1024 four
// 12309 nine
// function num2text(a){
//     var numbers = ['zero','one','two','three','four','five','six','seven','eight','nine'];
//     var num = ''+a;
//     num = num[num.length-1];
//     console.log(numbers[num]);
// }
//
// num2text(10567);
//
// Дефинирайте функция, която приема като параметър масив от числа
// и true/false като втори параметър. Ако е подаден – true – функцията
// намира сумата всички четни числа в масива. Ако е подаден – false –
// сумата на всички нечетни числа в масива.
// var arr = [1,5,6,10,4,7,3];
//
// function sum(arr,isEven){
//     var sum = 0;
//     for(var i = 0; i < arr.length; i++){
//         if(isEven){
//             if (arr[i] % 2 === 0) {
//                 sum+= arr[i];
//             }
//         }
//         else{
//             if (arr[i] % 2 !== 0) {
//                 sum+= arr[i];
//             }
//         }
//     }
//     console.log(sum);
//     return sum;
// }
//
// sum(arr);
//
// Напишете функция, която обръща цифрите на десетична дроб и я
// отпечатва като валидно число в конзолата.
// input output
// 256.00 652
// 123.45 54.321
// var number = 123.45;
// var reverseFloat = (num) => ('' + num).split('').reverse().join('');
// var result = reverseFloat(number);
//
// console.log(result);

// Напишете функция, която приема един параметър и отпечатва
// показаните по-долу триъгълници –
//
function drawTriangles(n){
    let str = '';
    let arr = [];
    for(let i = 0; i < n; i++){
        str += (i+1);
        str += ' ';
        console.log(str);
    }
    arr = str.split('');
    for(let j = n-1; j > 0; j--){
        arr.pop();
        arr.pop();
        console.log(arr.join(''));
    }
}

drawTriangles(5);
