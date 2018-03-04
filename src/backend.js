var globalVariables={
    userOnBackend: 'placeholder'
};

class user{
    constructor(name, age, weight, BAClevel, gender){
        this.name = name;
        this.age = age;
        this.weight = weight;
        this.BAClevel = BAClevel;
        this.gender = gender; 
    }

    getGender(){
        return this.gender;
    }

    getWeight(){
        return this.weight;
    }

    calculateBAC(drinkSize, percentage){
        var genderConstant; 

        console.log("name: " + this.name);
        
        if(this.gender == 'male'){
            genderConstant = 0.73;
        }else if(this.gender == "female"){
            genderConstant = 0.66;
        }

        console.log("gender constant: " + genderConstant);

        console.log("drink size: " + drinkSize);
        console.log("percentage: " + percentage);
        console.log("this bac: " + this.BAClevel);

        percentage = percentage / 100;

        this.BAClevel = this.BAClevel + (drinkSize * percentage * 5.14) / (this.weight * genderConstant);
        this.checkForBACWarning(); 

        console.log("bac level: " + this.BAClevel);
    }

    updateBAC(){
         this.BAClevel = this.BAClevel - ((1/60) * 0.015);
    }

    checkForBACWarning(){
        if(this.BAClevel < .04){
            $("#greeting").removeClass("hidden");
            $("#greeting").addClass("wrapper");
            $("#sixwarn").addClass("hidden");
            $("#eightwarn").addClass("hidden");
            $("#thirteenwarn").addClass("hidden");
            $("#sixteenwarn").addClass("hidden");
            $("#twentywarn").addClass("hidden");
            $("#twentyfivewarn").addClass("hidden")
        }
        if(this.BAClevel >= .04 && this.BAClevel <.08){
            $("#greeting").removeClass("wrapper");
            $("#greeting").addClass("hidden");
            $("#sixwarn").removeClass("hidden");
            $("#sixwarn").addClass("wrapper");
            $("#eightwarn").addClass("hidden");
            $("#thirteenwarn").addClass("hidden");
            $("#sixteenwarn").addClass("hidden");
            $("#twentywarn").addClass("hidden");
            $("#twentyfivewarn").addClass("hidden")
        }
        if(this.BAClevel >=.08 && this.BAClevel < .13){
            $("#eightwarn").removeClass("hidden");
            $("#greeting").addClass("hidden");
            $("#sixwarn").addClass("hidden");
            $("#eightwarn").addClass("wrapper");
            $("#thirteenwarn").addClass("hidden");
            $("#sixteenwarn").addClass("hidden");
            $("#twentywarn").addClass("hidden");
            $("#twentyfivewarn").addClass("hidden");
        } 
         if(this.BAClevel < .16 && this.BAClevel>= 0.13){
            $("#thirteenwarn").removeClass("hidden");
            $("#greeting").addClass("hidden");
            $("#sixwarn").addClass("hidden");
            $("#eightwarn").addClass("hidden");
            $("#thirteenwarn").addClass("wrapper");
            $("#sixteenwarn").addClass("hidden");
            $("#twentywarn").addClass("hidden");
            $("#twentyfivewarn").addClass("hidden");
        }
    
         if(this.BAClevel >= .16 && this.BAClevel < .20){
            $("#sixteenwarn").removeClass("hidden");
            $("#greeting").addClass("hidden");
            $("#sixwarn").addClass("hidden");
            $("#eightwarn").addClass("hidden");
            $("#thirteenwarn").addClass("hidden");
            $("#sixteenwarn").addClass("wrapper");
            $("#twentywarn").addClass("hidden");
            $("#twentyfivewarn").addClass("hidden")
        }
        if(this.BAClevel < .25 && this.BacLevel >= 0.20){
            $("#twentywarn").removeClass("hidden");
            $("#greeting").addClass("hidden");
            $("#sixwarn").addClass("hidden");
            $("#eightwarn").addClass("hidden");
            $("#eightwarn").removeClass("wrapper");
            $("#thirteenwarn").addClass("hidden");
            $("#sixteenwarn").addClass("hidden");
            $("#twentywarn").addClass("wrapper");
            $("#twentyfivewarn").addClass("hidden")
        }
        if(this.BAClevel >= 0.25){
            $("#twentyfivewarn").removeClass("hidden");
            $("#greeting").addClass("hidden");
            $("#sixwarn").addClass("hidden");
            $("#eightwarn").addClass("hidden");
            $("#thirteenwarn").addClass("hidden");
            $("#sixteenwarn").addClass("hidden");
            $("#twentywarn").addClass("hidden");
            $("#twentyfivewarn").addClass("wrapper")
        }
    }
}

class party{
    constructor(name,arrayUsers){
        this.name = name;
        this.arrayUsers = arrayUsers;
    }


        addDrinker(user){
            this.arrayUsers.push(user);
        }

        removeDrinker(user){

            var pos = this.arrayUsers.indexOf(user);
            this.arrayUsers.splice(pos,1);
        }
        
        getNumDrinkers()
        {
            return this.arrayUsers.length;
        }

        getUserArray()
        {
            return this.arrayUsers;
        }

        averageBAC()
        {
            var total;
            for(var i=0;i<arrayUsers.length; ++i)
            {
                total += this.arrayUsers[i].BAClevel;
            }
            return total;
        }

        highestBac()
        {
            var high =0;
            for(var i=0;i<arrayUsers.length; ++i)
            {
                if(this.arrayUsers[i].BAClevel >high)
                    high = this.arrayUsers[i].BAClevel;

            }
            return high;
        }
        //total/most drinks fn
        //money spent
        //most likely to vomit
}

var userOnPage;

// Grabbing inputs using jQuery.
$("#submit").click(function(e){
    //Prevent the page from refreshing.
    e.preventDefault();

    //Grabbing each input for clearing and taking input properties.
    var userName = $("#nameInput");
    var userAge = $("#ageInput");
    var userWeight = $("#weightInput");
    var userGender = $("input[name=gender]:checked");
    var userUsername = $("#usernameInput");
    var userPassword = $("#passwordInput");


    //Making sure everything is filled before submitting it.
    var requiredFieldsFilled;
    if(userName.val() == "" || userAge.val() == "" || userWeight.val() == "" || userGender.val() == undefined || userUsername.val() == "" || userPassword.val() == ""){
        requiredFieldsFilled = false;
        alert("Please fill all fields.");
    }
    else if(userAge.val() <21)
    {
        alert("You must be over 21 to use this Application")
    }
    else{
        requiredFieldsFilled = true;
    }

    if(requiredFieldsFilled != false){

        //Create a temp user that will be persistently stored by SQL. 
        userOnPage = new user(userName.val(), userAge.val(), userWeight.val(), 0.0, userGender.val());
        userOnPage.checkForBACWarning();

        var nameOfCurrentUser = userName.val();

        console.log("weight: " + userOnPage.weight);
        console.log("gender: " + userOnPage.gender);

        //Clear the input fields once we have persistently stored a user.
        userName.val("");
        userAge.val("");
        userWeight.val("");
        userGender.val("");
        userUsername.val("");
        userPassword.val("");

        globalVariables.userOnBackend = userOnPage;

        //Validate a user is now logged in if successful.
        $("#notLoggedNotifier").addClass("hidden");
        $("#loggedNotifier").html("Hello " + nameOfCurrentUser + "! Welcome to \"Got Your BAC\". Please input what drinks you consume, so we can help you track your BAC!");
        $("#loggedNotifier").removeClass("hidden");

    }
});

//Grabbing input data from drink adder.
$("#submitDrink").click(function(e){
    e.preventDefault();
    //Validating a fluid oz and percentage is put in.
    var validateFlag;
    var amount = $("#amount");
    var percentage = $("#percentage");
    var amountVerified;
    var percentageVerified;

    if(amount.val() == "" || percentage.val() == ""){
        validateFlag = false;
    }

    if(validateFlag == false){
        alert("Please enter in both a fluid ounce and percent value.");
    }
    else{
        amountVerified = amount.val();
        percentageVerified = percentage.val();
        userOnPage.calculateBAC(amountVerified, percentageVerified);
    }
});


var interval = setInterval( function () {

    updateBAC();},     
 60000);

