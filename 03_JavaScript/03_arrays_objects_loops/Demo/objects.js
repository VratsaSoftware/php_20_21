// var newCar = {};
// newCar.engine = 'model';
// newCar.fuel = 'petrol';
// newCar.enginePower = '90';
// newCar.enginePowerQuantity = 'HP';
// newCar.color = 'white';
// newCar.getEnginePower = function(){
//     console.log(this.enginePower + ' ' + this.enginePowerQuantity);
// };
//

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

//console.log(newCar, typeof newCar);
//console.log(newCar.getEnginePower());
//
newCar.color = 'blue';
console.log(newCar.color);
