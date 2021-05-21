var inputNumber = 273;
var result;

function numberToText(n){
    let output;
    switch (n) {
        case 0:
            output = 'Zero';
            break;
        case 1:
            output ='One';
            break;
        case 2:
            output ='Two';
            break;
        case 3:
            output ='Three';
            break;
        case 4:
            output ='Four';
            break;
        case 5:
            output ='Five';
            break;
        case 6:
            output ='Six';
            break;
        case 7:
            output ='Seven';
            break;
        case 8:
            output ='Eight';
            break;
        case 9:
            output ='Nine';
            break;
        case 10:
            output ='Ten';
            break;
        case 11:
            output ='Eleven';
            break;
        case 12:
            output ='Twelve';
            break;
        case 13:
            output ='Thirteen';
            break;
        case 14:
            output ='Fourteen';
            break;
        case 15:
            output ='Fiftheen';
            break;
        case 16:
            output ='Sixteen';
            break;
        case 17:
            output ='Seventeen';
            break;
        case 18:
            output ='Eighteen';
            break;
        case 19:
            output ='Nineteen';
            break;
        default:

    }
    return output;
}

function numberToTextLessThanHundred(n){
    let numString = n.toString();
    let prefix;

    if(n >= 20){
        prefix = 'Twenty'
    }
    if(n >= 30){
        prefix = 'Thirty'
    }
    if(n >= 40){
        prefix = 'Fourty'
    }
    if(n >= 50){
        prefix = 'Fivety'
    }
    if(n >= 60){
        prefix = 'Sixty'
    }
    if(n >= 70){
        prefix = 'Seventy'
    }
    if(n >= 80){
        prefix = 'Eighty'
    }
    if(n >= 90){
        prefix = 'Ninety'
    }

    if(numString[numString.length-1] !== '0'){
        prefix += ' ' + numberToText(+numString[numString.length-1]);
    }

    return prefix;
}

if(inputNumber < 16){
    result = numberToText(inputNumber);
}

if(inputNumber >19 && inputNumber < 100){
    result = numberToTextLessThanHundred(inputNumber);
}

if(inputNumber > 99 && inputNumber < 1000){
    let numString = inputNumber.toString();
    let tent = +(numString[1]+numString[2]);

    result = numberToText(+numString[0]) + ' hundred ';

    if(tent < 20){
        result += numberToText(tent)
    }
    else{
        result += numberToTextLessThanHundred(tent);
    }

}

console.log(result);
