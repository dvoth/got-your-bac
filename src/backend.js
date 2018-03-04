class user{
    constructor(name, age, weight, BAClevel, gender){
        this.name = name;
        this.age = age;
        this.weight = weight;
        this.BAClevel = BAClevel;
        this.gender = gender; 

    }

    checkForBACWarning(){
        if(this.BAClevel < 8){
            $("#greeting").removeClass("hidden");
            $("#greeting").addClass("wrapper");
            $("#sixwarn").addClass("hidden");
            $("#eightwarn").addClass("hidden");
            $("#thirteenwarn").addClass("hidden");
            $("#sixteenwarn").addClass("hidden");
            $("#twentywarn").addClass("hidden");
            $("#twentyfivewarn").addClass("hidden")
        }
        if(this.BAClevel > 8){
            $("#eightwarn").removeClass("hidden");
            $("#greeting").addClass("hidden");
            $("#sixwarn").addClass("hidden");
            $("#eightwarn").addClass("wrapper");
            $("#thirteenwarn").addClass("hidden");
            $("#sixteenwarn").addClass("hidden");
            $("#twentywarn").addClass("hidden");
            $("#twentyfivewarn").addClass("hidden");
        }
         if(this.BAClevel<14 && this.BAClevel>8){
            $("#thirteenwarn").removeClass("hidden");
            $("#greeting").addClass("hidden");
            $("#sixwarn").addClass("hidden");
            $("#eightwarn").addClass("hidden");
            $("#thirteenwarn").addClass("wrapper");
            $("#sixteenwarn").addClass("hidden");
            $("#twentywarn").addClass("hidden");
            $("#twentyfivewarn").addClass("hidden");
        }
    
         if(this.BAClevel<19 && this.BAClevel>13){
            $("#sixteenwarn").removeClass("hidden");
            $("#greeting").addClass("hidden");
            $("#sixwarn").addClass("hidden");
            $("#eightwarn").addClass("hidden");
            $("#thirteenwarn").addClass("hidden");
            $("#sixteenwarn").addClass("wrapper");
            $("#twentywarn").addClass("hidden");
            $("#twentyfivewarn").addClass("hidden")
        }
        if(this.BAClevel<24 && this.BacLevel>19){
            $("#twentywarn").removeClass("hidden");
            $("#greeting").addClass("hidden");
            $("#sixwarn").addClass("hidden");
            $("#eightwarn").addClass("hidden");
            $("#thirteenwarn").addClass("hidden");
            $("#sixteenwarn").addClass("hidden");
            $("#twentywarn").addClass("wrapper");
            $("#twentyfivewarn").addClass("hidden")
        }
        if(this.BAClevel>24){
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
        var userOnPage = new user(userName.val(), userAge.val(), userWeight.val(), 13.0,userGender.val());
        userOnPage.checkForBACWarning();

        //Clear the input fields once we have persistently stored a user.
        userName.val("");
        userAge.val("");
        userWeight.val("");
        userGender.val("");
        userUsername.val("");
        userPassword.val("");

    }

       
});
var users =["tom","ur mom","yolo"];
var issa = new party("pineapple",users);
console.log(issa);
issa.addDrinker("potato");
console.log(issa);
issa.removeDrinker("yolo");
console.log(issa);
var rand = issa.getNumDrinkers();
console.log(rand);


var interval = setInterval( function () {

    updateBAC();},     
 60000);

