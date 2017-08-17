function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}

function include_header() {
    document.getElementById("header").innerHTML='<object type="text/html" data="navi.html" ></object>';
}