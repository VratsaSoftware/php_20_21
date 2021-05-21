var inputNumber = 273,
    inputNumberString,
    inputNumberStringLength,
    result;

inputNumberString = inputNumber.toString();
inputNumberStringLength = inputNumberString.length;

function smallNumberToText(inputNumberString){
    let num = +inputNumberString;

    switch (num) {
        case 0:
            return 'Zero';
        case 1:
            return 'One';
        case 2:
            return 'Two';
        case 3:
            return 'Three';
        case 4:
            return 'Four';
        case 5:
            return 'Five';
        case 6:
            return 'Six';
        case 7:
            return 'Seven';
        case 8:
            return 'Eight';
        case 9:
            return 'Nine';
        case 10:
            return 'Ten';
        case 11:
            return 'Eleven';
        case 12:
            return 'Twelve';
        case 13:
            return 'Thirteen';
        case 14:
            return 'Fourteen';
        case 15:
            return 'Fiveteen';
        case 16:
            return 'Sixteen';
        case 17:
            return 'Seventeen';
        case 18:
            return 'Eighteen';
        case 19:
            return 'Nineteen';

        default:
            return false;
    }
}

function largeNumberToText(inputNumberString){

    let num = +inputNumberString,
        prefix;

    if(num >= 20 && num < 30){
        prefix = 'Twenty';
    }

    if(num >= 30 && num < 40){
        prefix = 'Thirty';
    }

    if(num >= 40 && num < 50){
        prefix = 'Forty';
    }

    if(num >= 50 && num < 60){
        prefix = 'Fifty';
    }

    if(num >= 60 && num < 70){
        prefix = 'Sixty';
    }

    if(num >= 70 && num < 80){
        prefix = 'Seventy';
    }

    if(num >= 80 && num < 90){
        prefix = 'Eighty';
    }

    if(num >= 90 && num < 100){
        prefix = 'Ninety';
    }

    if(inputNumberString[inputNumberString.length-1] !== '0'){
        prefix += ' ' + smallNumberToText(inputNumberString[inputNumberString.length-1]);
    }

    return prefix;

}


if(inputNumber < 20){
    result = smallNumberToText(inputNumberString);
}

if(inputNumber >= 20 && inputNumber < 100){
    result = largeNumberToText(inputNumberString);
}

if(inputNumber >= 100 && inputNumber <= 999){
    let tenth = +(inputNumberString[1]+inputNumberString[2]);
    result = smallNumberToText(inputNumberString[0]) + ' Hundred ';

    if(tenth){
        result += largeNumberToText(tenth.toString());
    }

}



console.log(result);
