// Напишете JavaScript програма, която намира максималната
// последователност от еднакви числа в масив и я отпечатва в
// конзолата. /числата са подадени като стрингове/
// Input Output
// ['10', '2', '1', '1', '2', '3', '3', '2', '2', '2', '1'] 3

// var arr = ['10', '2', '1', '1','1','1','1', '2', '3', '3', '2', '2', '2', '2','1'];
// var maxSeq = 0;
//
// for (var i = 0; i < arr.length; i++) {
//     var counter = 1;
//     for(var z = i+2; z < arr.length; z++){
//         if(arr[i] === arr[z]){
//             counter+=1;
//         }
//         else{
//             break;
//         }
//         if(counter > maxSeq){
//             maxSeq = counter;
//         }
//     }
// }
//
// console.log(maxSeq);
//
// Напишете JavaScript програма, която отпечатва матрица, като
// посочения пример, по зададено цяло число N.
// Input - Масив с един елемент – числото N.
// Input Output
// ['2']
// 1 2
// 2 3
// var n = 2;
// for(var i = 0; i < n; i++){
//     var str = '';
//     for(var y = 0; y < n; y++){
//
//         str += ''+(i+1+y);
//     }
//     console.log(str);
// }
//0-9 A-F
// 16 към 10. Като използвате цикли, напишете javascript
// програма, която конвертира шестнайсетични към десетични
// числа. Входни данни – масив с един елемент – шестнайсетично
// число
// var hex = '1AE3';
// var arr = hex.split('').reverse();
// var hex2dec = ['0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F'];
// var arr2 = [];
// var result = 0;
// for(var i = 0; i < arr.length; i++){
//     arr2.push(hex2dec.indexOf(arr[i]));
// }
//
// for(var i = 0; i < arr2.length; i++){
//     result += arr2[i] * Math.pow(16,i);
// }
//
// console.log(result);
//
// Отпечатайте всички четирицифрени числа ABCD, за които A+B =
// C+D (известни като щастливи числа).
//1010
//1111
//2222
// var happyNums = [];
// var count = 0;
// for(var i = 1000; i <= 9999; i++){
//     var num = ''+i;
//     if((+num[0])+(+num[1]) == (+num[2])+(+num[3])){
//         happyNums.push(i);
//         count+=1;
//     }
// }
//
// console.log(count,happyNums);
