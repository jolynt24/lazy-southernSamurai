 function iconChangeOpen(x) {
    openNavigation();
    x.classList.toggle("change");
 }
 function openNavigation() {
    document.getElementById("navigation").style.width = "250px";
    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
 }
 function iconChangeClose(x) {
    closeNavigation();
    x.classList.toggle("change");
 }
 function closeNavigation() {
    document.getElementById("navigation").style.width = "0";
    document.body.style.backgroundColor = "white";
 }
