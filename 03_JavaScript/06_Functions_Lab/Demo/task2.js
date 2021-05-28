// Напишете JS функция, която проверява масив от прости числа, в който липсва
// едно от простите числа в дадения интервал. Функцията връща липсващото
// число.
// Input output
// [11, 3, 7] 5
//
let inputArray = [17, 5, 11, 13, 3, 7];

function isPrime(n){
    for(let i = 2; i < n; i++){
        if( n % i === 0){
            return false;
        }
    }
    return true;
}

function checkPrimeArray(arr){

    let result = [];
    let min = arr[0];
    let max = arr[0];

    for( let i = 0; i < arr.length; i++){
        if(arr[i] < min){
            min = arr[i];
        }
        if(arr[i] > max){
            max = arr[i];
        }
    }

    for(let i = min + 1; i < max; i+=1){
        if(isPrime(i)){
            if(arr.indexOf(i) < 0){
                result.push(i);
            }
        }
    }

    return result;

}

console.log(checkPrimeArray(inputArray));
