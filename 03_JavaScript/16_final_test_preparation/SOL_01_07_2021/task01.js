// Напишете функция, 
//която връща масив с уникални елементи - числа. 
// Функцията получава като параметър - стринг. 
//При подаване на празен 
// стринг , функцията отпечатва в конзолата - The input must not be an 
// empty string. В случай, че стрингът не съдържа числа, функцията 
// отпечатва - ‘The input values must be convertible to numbers’

function uniqueElArr( str ){
	let resArr = [];
//'' " " -> ""

	if( str.trim() ){
		var inputArr = str.split(' ');
		for( let ind in inputArr ){
			//isNan
			if( !isNaN( inputArr[ind] ) && inputArr[ind] != ''){
				if( resArr.indexOf( inputArr[ind] ) > -1 ){
					continue;
				} else {
					resArr.push( inputArr[ind] );
				}
			}

		}

	} else{

		return 'The input must not be an empty string';
	}

	if( resArr.length ){
		return resArr;
	}

	return "The input values must be convertible to a number";	
}

var param = '';
var param = ' ';
var param = '1 2 2 6 8 6 7 8';
var param = '0 0 0 0 0 ';
// var param = 'mk pp we vfv';
// var param = '1 br 2 1 werr 3 1';
// var param = '2 "" add "" 1 1 asd 2 "" 3';
console.log( uniqueElArr( param ) );