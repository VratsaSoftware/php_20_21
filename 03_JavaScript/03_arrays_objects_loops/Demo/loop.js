var arr = [1 ,2 ,'Ivan' ,'Vratsa' ,5 ,6 ,true];
// for(let i = 0; i < arr.length; i ++){
//     console.log(arr[i]);
// }
//
// for(let i = arr.length-1; i >= 0; i--){
//     console.log(arr[i]);
// multiDimArray = [
//     ['0,0','0,1','0,2'],
//     ['1,0','1,1','1,2'],
//     ['2,0','2,1','2,2'],
// ];
//
// for(let i = 0; i < multiDimArray.length; i++){
//     for(let y = 0; y < multiDimArray[i].length; y++){
//         console.log(multiDimArray[i][y]);
//     }
// }

//use 'of' to iterate
// for(let element of arr){
//     console.log(element);
// }
//
arr.test = 'test_property';
// for(let element in arr){
//     console.log(arr[element]);
// }
//
// for(let element of arr){
//     console.log(element);
// }

var newCar = {
    engine : 'modelABCD',
    fuel : 'diesel',
    enginePower : '100',
    enginePowerQuantity : 'kW',
    color : 'white',
    getEnginePower : function(){
        console.log(this.enginePower + ' ' + this.enginePowerQuantity);
        return this.enginePower + ' ' + this.enginePowerQuantity;
    },
};

for(let element in newCar){
    console.log(newCar[element]);
}
