class user{
    constructor(age, weight, BAClevel, gender){
        this.age = age;
        this.weight = weight;
        this.BAClevel = BAClevel;
        this.gender = gender; 
    }

}
class backend{
    calculateBAC(user){
        var genderConstant; 
        if(user.gender = "male"){
            genderConstant = 0.68;
        }else if(user.gender = "female"){
            genderConstant = 0.55;
        }
    }
    
    updateBAC(){
    
    }
}