onClickLogin = () => {
    document.getElementById("div1").style.display = "none";
    document.getElementById("div2").style.display = "block";
}

onClickBack = () => {
    document.getElementById("div2").style.display = "none";
    document.getElementById("div3").style.display = "none";
    document.getElementById("div4").style.display = "none";
    document.getElementById("div1").style.display = "block";
}

var select = 0;
onClickContact = () => {
    document.getElementById("div3").style.display = "block";
    if(select >= 1){
        document.getElementById("send").style.display = "block";  
    }
    select++
}

onClickAppointment = () => {
    document.getElementById("div4").style.display = "block";
    if(select >= 1){
        document.getElementById("send").style.display = "block";  

    }
    select++
}