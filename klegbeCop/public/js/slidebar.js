/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/slidebar.js ***!
  \**********************************/
var mybutton = document.getElementById("mybtn-togger");
var mytogger = document.getElementById("mylateral_navbar");
var mynavcolor = document.getElementById('navcolor');
var nav_items = document.getElementById('nav_items');
mytogger.getAttribute("navlateral", "false");
mybutton.onclick = click;

function click() {
  mynavcolor.getAttribute('navcolor');

  if (mytogger.hasAttribute("navlateral")) {
    mytogger.removeAttribute("navlateral");
    nav_items.classList.remove('hidden');
    mytogger.style.transition = " .5s";
    mynavcolor.removeAttribute("navcolor");
    mytogger.classList.toggle("w-64");
    mynavcolor.classList.remove('text-indigo-300');
    mynavcolor.classList.add('text-white');
    mytogger.classList.remove("bg-white");
    mytogger.style.backgroundColor = "#034DFC";
  } else {
    mytogger.style.removeProperty("width");
    mytogger.classList.add('w-20');
    nav_items.classList.add('hidden');
    mytogger.setAttribute("navlateral", "true");
    mybutton.classList.remove("hidden");
    mytogger.style.removeProperty("background-color");
    mytogger.classList.add("bg-white");
    mynavcolor.classList.add('text-indigo-300');
  }
}

function myFunction(x) {
  if (x.matches) {
    // If media query matches
    mytogger.classList.add('w-full');
    mytogger.setAttribute("navlateral", "true");
    mybutton.classList.remove("hidden");
    mytogger.style.removeProperty("background-color");
    mytogger.classList.add("bg-white");
    mynavcolor.classList.add('text-indigo-300');
  } else {
    mytogger.classList.remove('w-full');
    mytogger.classList.toggle('w-20');
  }
}

var x = window.matchMedia("(max-width: 768px)");
myFunction(x); // Call listener function at run time

x.addListener(myFunction); // Attach listener function on state changes
/******/ })()
;