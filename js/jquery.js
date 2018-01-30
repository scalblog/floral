$(function(){
    // $("#testJson").submit(function(){
    //     // on stocke valeurs saisies dans variables
    //     login = $(this).find("input[name=login]").val();
    //     password = $(this).find("input[name=password]").val();
    //     url = $(this).attr("action");

    //     name = $(this).find("input[name=name]").val();
    //     alert(name);
    //     return false;
    // });


    $("#envoyer").click(function(){
        var valid = true;
        if($("#name").val() == "") {
            $("#name").css("border-color","red");
            $("#name").next(".error-message").fadeIn().text('Vous n\'avez pas saisi votre nom.');
            valid = false;
        }
        else if (!$("#name").val().match(/^[a-z]+$/i)){
            $("#name").next(".error-message").fadeIn().text('La saisie de votre nom n\'est pas correcte.');
            valid = false;
        }
        else {
            $("#name").next(".error-message").fadeOut();
        }

        if($("#address").val() == ""){
            $("#address").css("border-color","red");
            $("#address").next(".error-message").fadeIn().text("Vous n\'avez pas mentionné votre adresse.");
            valid = false;
        }
        else if (!$("#address").val().match(/^[a-z]+$/i)){
            $("#address").next(".error-message").fadeIn().text('La saisie de votre adresse n\'est pas correcte.');
            valid = false;
        }
        else {
            $("#address").next(".error-message").fadeOut();
        }
        
        return valid;
    });


    $("#envoi").click(function(){
        if($("input[name=renseignement]").val() == "exemples") {
            maValeur = $("input[name=renseignement]").val();
            alert( maValeur + " : c\'est la valeur saisie" );
        }
        age = $("input[name=age]").val();
        if($("input[name=age]").val() >= 18 && $("input[name=age]").val() <= 109) {
            alert( "Vous avez " + age + " ans, vous êtes donc majeur." );
        }
        else if($("input[name=age]").val() <= 18 && $("input[name=age]").val() >=0 ) {
            alert (" Vous êtes mineur et ne pouvez pas acheter de cigarettes ici.")
        }

        else if($("input[name=age]").val() >= 110) {
            confirm ("Veuillez confirmer que vous avez " + age + " ans.");
        }
        else {
            alert ("Veuillez saisir votre âge, merci.");
        }
    });
    
    
});