onClick = () => {
    var nom = document.getElementById("nom").value;
    var prenom = document.getElementById("prenom").value;
    var email = document.getElementById("email").value;
    var telephone = document.getElementById("telephone").value;
    var patternEmail = new RegExp("^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$");
    var patternTelephone = new RegExp("^0[1-9]([-. ]?[0-9]{2}){4}$");
    if (nom != "" && prenom != "" && patternEmail.test(email) && patternTelephone.test(telephone)) {
        document.getElementById("div1").style.display = "none";
        document.getElementById("error").style.display = "none";
        document.getElementById("div2").style.display = "block";
    }
    else {
        document.getElementById("error").innerHTML = "";
        if (nom === "") {
            console.log("non invalide")
            document.getElementById("error").innerHTML += " Non ";
        }
        if (prenom === "") {
            console.log("prenom invalide")
            document.getElementById("error").innerHTML += " Prénom ";
        }
        if (!patternEmail.test(email)) {
            console.log("email invalide")
            document.getElementById("error").innerHTML += " Email ";
        }
        if (!patternTelephone.test(telephone)) {
            console.log("telephone invalide")
            document.getElementById("error").innerHTML += " Téléphone ";
        }
        document.getElementById("error").innerHTML += ": incomplet...";
        document.getElementById("error").style.display = "block";

    }

}

onClickBack = () => {
    document.getElementById("div2").style.display = "none";
    document.getElementById("div1").style.display = "block";
}