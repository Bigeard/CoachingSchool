onClick = () => {
    document.getElementById("div1").style.display = "none";
    document.getElementById("div2").style.display = "block";
}

onClickBack = () => {
    document.getElementById("div2").style.display = "none";
    document.getElementById("div1").style.display = "block";
}

// window.addEventListener('scroll', function(evt) {
//     document.getElementById("navbar").style.display = "block";
// });


// onNavbar = () => {
//     setTimeout(() => {
//         document.getElementById("navbar").style.display = "none";
//         console.log("eddd")
//     }, 300);

// }