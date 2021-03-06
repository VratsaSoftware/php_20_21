// Ще казваме, че поредица от числа е трион, ако всяко число в нея е
// едновременно по-голямо или равно от двата си съседа или пък едновременно
// по-малко или равно от тях. За първия и последния елемент имаме само по един
// съсед. За определеност, считаме, че празната редица и всяка редица
// съставена само от един елемент също са трион. Например дадените по-долу
// редица са триони:
// ● 10, 2, 20, 15, 16, -10, 100, 99, 101
// ● 20, 10
// ● 1
// Напишете функция, която приема на брой цели числа. Функцията връща "yes", ако
// въведената поредица е трион, или "no", в противен случай

let inputData = [11,7,16,17];

function isSaw(arr){
    let result = 'Yes';
    let flag = 0;

    if( arr.length < 3){
        return result;
    }


    for(let i = 1; i < arr.length-1; i++){

        if((arr[i] <= arr[i-1] && arr[i] <= arr[i+1]) || (arr[i] >= arr[i-1] && arr[i] >= arr[i+1])){
            continue;
        }
        else{
            flag += 1;
        }
    }

    if(flag > 0){
        result = 'No';
    }

    return result;

}

console.log(isSaw(inputData));
