function numberToNumberName(n = 0){
    switch (n) {
        case 0:
            return 'Zero';
            break;
        case 1:
            return 'One';
            break;
        case 2:
            return 'Two';
            break;
        case 3:
            return 'Three';
            break;
        case 4:
            return 'Four';
            break;
        default:
            return false;

    }
}

//console.log(numberToNumberName());

var c;

function sum(num1,num2){
    return num1 + num2;
}

c = sum(5,7);

console.log(c);
