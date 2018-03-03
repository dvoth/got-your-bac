class user{
    constructor(age, weight, BAClevel, gender){
        this.age = age;
        this.weight = weight;
        this.BAClevel = BAClevel;
        this.gender = gender; 
    }

}
class backend{
    calculateBAC(user, drinkSize, percentage){
        var genderConstant; 
        if(user.gender = "male"){
            genderConstant = 0.68;
        }else if(user.gender = "female"){
            genderConstant = 0.55;
        }

        var alcoholDose = drinkSize * percentage * 14;
        var bodyWeightInGrams = user.weight *454 ;
        var rawNumber = bodyWeightInGrams * genderConstant;
        user.BAClevel = (alcoholDose / rawNumber) * 100; 

    }
    
    updateBAC(user){
        user.BAClevel = user.BAClevel - ((1/60) * 0.015);
    }
    updateBACHourly(user){
        user.BAClevel = user.BAClevel - ((1) * 0.015);
    }
}
var interval = setInterval( function () {
    updateBAC();},     
 60000);