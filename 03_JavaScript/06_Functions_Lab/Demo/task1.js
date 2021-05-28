// Напишете JS функция, която преброява вариантите за представяне на числото
// K като сума от квадратите на максимум две числа. С други думи вашата работа
// е да представите числото k и преброите вариантите k = a2 + b2 и k = c
// Input output
// k=1 1
// K = 25 3

function numOfk(k){
    let arr = [];
    for(let i = 0; i <= k; i+=1){
        if(k === Math.pow(i,2)){
            arr.push('pow of '+ i +' is ' + k);
        }

        for(let y = 0; y < k; y+=1){
            if(Math.pow(i,2) + Math.pow(y,2) === k)
            arr.push('Pow of ' + i +'plus pow of' + y + ' is '+k);
        }
    }
    return arr;

}

console.log(numOfk(25));
