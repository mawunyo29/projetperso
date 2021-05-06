const { remove } = require("lodash")

var mybutton = document.getElementById("mybtn-togger")
var mytogger = document.getElementById("mylateral_navbar")
var mynavcolor =document.getElementById('navcolor')
var nav_items = document.getElementById('nav_items')

mytogger.getAttribute("navlateral","false")
mytogger.classList.toggle('md:w-20')
mytogger.classList.toggle('md:z-50')

mytogger.classList.toggle('flex')


mybutton.onclick =click
 function click(){
    mynavcolor.getAttribute('navcolor')
   
    if (mytogger.hasAttribute("navlateral") ) {
        mytogger.removeAttribute("navlateral")
        
        nav_items.classList.remove('hidden')
        mytogger.style.transition=" .5s"
      
       
        mynavcolor.removeAttribute("navcolor")
        mytogger.classList.toggle("md:w-64")
       
        mynavcolor.classList.remove('text-indigo-300')
        mynavcolor.classList.add('text-white')
        mytogger.classList.remove("bg-white")
        mytogger.style.backgroundColor="#034DFC"
       
    }
    
    else{
        mytogger.classList.remove('md:w-64')
      
        nav_items.classList.add('hidden')
        mytogger.setAttribute( "navlateral","true")
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

 
var formmultiple = document.getElementById('formmultiple')
   
    var i= 0
multiInputbtn.onclick= addElem
 function addElem(){
    var myInputDiv =document.getElementById('myInputDiv')
    myInputDiv.classList.remove('hidden')
     i++
    
 
  
   myInputDiv.getAttribute('myInputDiv')
  var otherDiv= myInputDiv.cloneNode(true)
  
  otherDiv.setAttribute('id','myInputDiv'+i)
    formmultiple.appendChild(otherDiv)
    
    

 }
/**
 * remove form input
 */

 var removebtn =document.getElementById('removebtn')
 removebtn.onclick = remov

 function remov(){
 if (document.getElementById('myInputDiv'+i)) {
     i--
    formmultiple.lastChild.remove()
 }
    
 }