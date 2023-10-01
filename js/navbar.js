window.onscroll = function() {
    var navbar = document.getElementById("navigation-nav");
    var items = document.getElementsByClassName("item-nav");
    if (document.body.scrollTop > 0 || document.documentElement.scrollTop > 550) {
    navbar.style.backgroundColor = "white";
    for (var i = 0; i < items.length; i++) {
        items[i].style.color = "black";
    }
    } else {
    navbar.style.backgroundColor = "transparent";
    for (var i = 0; i < items.length; i++) {
        items[i].style.color = "white";
    }
    }
};