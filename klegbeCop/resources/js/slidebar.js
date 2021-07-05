const { remove } = require("lodash")

var mybutton = document.getElementById("mybtn-togger")
var mytogger = document.getElementById("mylateral_navbar")
var mynavcolor = document.getElementById('navcolor')
var nav_items = document.getElementById('nav_items')

mytogger.getAttribute("navlateral", "false")
mytogger.classList.toggle('md:w-20')
mytogger.classList.toggle('md:z-50')

mytogger.classList.toggle('flex')


mybutton.onclick = click
function click() {
    mynavcolor.getAttribute('navcolor')

    if (mytogger.hasAttribute("navlateral")) {
        mytogger.removeAttribute("navlateral")

        nav_items.classList.remove('hidden')
        mytogger.style.transition = " .5s"


        mynavcolor.removeAttribute("navcolor")
        mytogger.classList.toggle("md:w-64")

        mynavcolor.classList.remove('text-indigo-300')
        mynavcolor.classList.add('text-white')
        mytogger.classList.remove("bg-white")
        mytogger.style.backgroundColor = "#034DFC"

    }

    else {
        mytogger.classList.remove('md:w-64')

        nav_items.classList.add('hidden')
        mytogger.setAttribute("navlateral", "true")
        mybutton.classList.remove("hidden")
        mytogger.style.removeProperty("background-color")
        mytogger.classList.add("bg-white")
        mynavcolor.classList.add('text-indigo-300')
    }
}

/**
 * creat dinamic multiple input  when click on button
 * 
 *  */
var multiInputbtn = document.getElementById('multiInputbtn')
var myfre =document.getElementById("x-ref")




var formmultiple = document.getElementById('formmultiple')

var i = 0
if (multiInputbtn !=null) {
    multiInputbtn.onclick = addElem
}

var myInputDiv = document.getElementById('myInputDiv')
var imageUpload = document.getElementById('imageUpload')
function addElem(e) {
  
   
   
    
    
    myInputDiv.classList.remove('hidden')
   
  
    

    myInputDiv.getAttribute('myInputDiv')
    

    var otherDiv = myInputDiv.cloneNode(true)
  
    otherDiv.setAttribute('id', 'myInputDiv' + i)
    if (myInputDiv.classList.toggle("border-blue-500")) {
     
        otherDiv.classList.remove("border-blue-500") 
        otherDiv.classList.add("border-green-500") 
    }
   
   
    imageUpload.setAttribute('id','imageUpload'+i)
    myfre.setAttribute("id", 'x-ref'+i)
    formmultiple.appendChild(otherDiv)
    i++
    e.preventDefault();

}
 


console.log(imageUpload)
if (imageUpload !=null) {


  imageUpload.onclick = clickmydiv
   function clickmydiv(){
    
    myfre.click()
   }


}

/**
 * remove form input
 */

var removebtn = document.getElementById('removebtn')

if (removebtn !=null) {
    removebtn.onclick = remov  
}
function remov(e) {
    if (document.getElementById('myInputDiv' + i)) {
        i--
        formmultiple.lastChild.remove()
    }
    e.preventDefault();
}

/**
 * accordion
 */

 var acc = document.getElementsByClassName("accordion");
 var i;
 
 for (i = 0; i < acc.length; i++) {
   acc[i].addEventListener("click", function() {
     this.classList.toggle("active");
     var panel = this.nextElementSibling;
     if (panel.style.display === "block") {
       panel.style.display = "none";
     } else {
       panel.style.display = "block";
     }
   });
 }
