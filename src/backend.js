class user{
    constructor(name, age, weight, BAClevel, gender){
        this.name = name;
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
}

// Grabbing inputs using jQuery.
$("#submit").click(function(e){
    //Prevent the page from refreshing.
    e.preventDefault();

    //Grabbing each input for clearing and taking input properties.
    var userName = $("#nameInput");
    var userAge = $("#ageInput");
    var userWeight = $("#weightInput");
    var userGender = $("input[name=gender]:checked");


    




    //Making sure everything is filled before submitting it.
    var requiredFieldsFilled;
    if(userName.val() == "" || userAge.val() == "" || userWeight == "" || userGender.val() == undefined){
        requiredFieldsFilled = false;
        alert("Please fill all fields.");
    }
    else{
        requiredFieldsFilled = true;
    }



    if(requiredFieldsFilled != false){

        //Create a temp user that will be persistently stored by SQL. 
        var userOnPage = new user(userName.val(), userAge.val(), userWeight.val(), 0.0,userGender.val());

        //Clear the input fields once we have persistently stored a user.
        userName.val("");
        userAge.val("");
        userWeight.val("");
        userGender.val("");

        alert(userOnPage.age + " and " + userOnPage.weight + " is " + userOnPage.name+" y0 "+ userOnPage.gender);
    }

});

var interval = setInterval( function () {
    updateBAC();},     
 60000);

