var globalVariables={
    userOnBackend: 'placeholder'
};

class user{
    constructor(name, age, weight, BAClevel, standardDrinks, gender){
        this.name = name;
        this.age = age;
        this.weight = weight;
        this.BAClevel = BAClevel;
        this.gender = gender; 
        this.standardDrinks = 0;
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

        this.standardDrinks = this.standardDrinks + (drinkSize * 29.5735 * percentage * 0.789 / 14);

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

class Party{
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
        userOnPage = new user(userName.val(), userAge.val(), userWeight.val(), 0.0, 0.0, userGender.val());
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

/**********************************/
/*       ~ ~ ~ Party ~ ~ ~        */
/**********************************/

var parties = [];
var selectedParty;
 
 $("#create-party").click(function(e){
    $(".initial_options").hide();
    $(".party_registration").show();
 });

 $("#submit_party").on("click", function() {
    var partyName = $("#partyName").val()

    if (partyName != '') {
        var staticUsers = populateUsers()
        parties.push(new Party(partyName, staticUsers))
        
        $(".party_registration").hide();
        $("#partyName").val("")
        $(".initial_options").show();

    } else {
        alert('Please enter a party name')
    }
    
 })

 $("#join-party").on("click", function() {
    $(".initial_options").hide();
    $("#party_list").show();
    parties.forEach(function(party) {
        $("#party_list").append("<button value='" + party.name + "' class='party-button w3-btn w3-white w3-border w3-border-green w3-round-xlarge' style='width:100%;'>" + party.name + "</button>")
    })
 })

 $("#party_list").on("click", ".party-button", function() {
    $("#party_list").hide();
    $("#userList").show();
    $("#leave-party").show();

    var partyName = $(this).val()

    parties.forEach(function(party) {
        if (party.name == partyName) {
            selectedParty = party
        }
    })

    $("#party-name").text(partyName)
    selectedParty.addDrinker(userOnPage)

    selectedParty.arrayUsers.forEach(function(user) {
        $("<p>" + user.name + "</p>").insertBefore("#leave-party")
    })

 })

 $("#leave-party").on("click", function() {
    this.selectedParty = null
    $("#userList").hide();
    $(".initial_options").show();
 })

function populateUsers() {
    var users = []

    users.push(new user("John Flanagan", 52, 206, .03, 2, 'male'))
    users.push(new user("Stacy Smith", 32, 107, .04, 3, 'female'))
    users.push(new user("Dalton Voth", 43, 190, .08, 4, 'male'))
    users.push(new user("Jessica Tetzner", 44, 123, .12, 9, 'female'))
    users.push(new user("Jace Plute", 23, 170, .18, 10, 'male'))
    users.push(new user("Derek Oshner", 22, 190, .09, 6, 'male'))

    return users
}
