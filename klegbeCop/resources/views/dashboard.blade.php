<x-app-layout class="bg-gray-100 flex ">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    
    
        <nav class="bg-gray-900  grid grid-cols-1 items-center p-1  relative  lateral_togger  container  h-full  shadow-2xl" id="mylateral_navbar"   navlateral>
            
            <div class="col-span-1  p-2 my-3" >

                <button id="mybtn-togger"
                    class=" ring-0  flex items-center p-1 text-white  hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
               
            </div>
            <div class="p-6 border-t  text-indigo-300 border-gray-200"  navcolor id="navcolor">
                <ul class=" divide-y-0  items-center text-center overflow-hidden w-full grid grid-cols-1 gap-8  ">
                    <li class="mt-3 flex items-center text-sm font-semibold "><i class="fas fa-home left-0 float-left flex  right-0"> </i> <h2 class=" float-left px-8 mx-5 cursor-pointer">Home</h2></li>
                    <li class="mt-3 flex items-center text-sm font-semibold  "><i class="far fa-address-card  left-0 float-left"></i><h2 class=" float-left px-8 mx-5 cursor-pointer ">Manager</h2></li>
                    <li class="mt-3 flex items-center text-sm font-semibold "><i class="fas fa-tasks left-0 float-left  right-0"></i><h2 class=" float-left px-8 mx-5 cursor-pointer ">Projets</h2></li>
                    <li class="mt-3 flex items-center text-sm font-semibold "><i class="fas fa-th left-0 float-left  right-0"></i><h2 class=" float-left px-8 mx-5 cursor-pointer">Tables</h2></li>

                    <li class="mt-3 flex items-center text-sm font-semibold  "><i class="far fa-bell left-0 float-left  right-0"></i></i><h2 class=" float-left px-8 mx-5 cursor-pointer ">Notifications</h2></li>
   
                    <li class="mt-3 flex items-center text-sm font-semibold "><i class="fas fa-phone left-0 float-left  right-0"></i><h2 class="float-left px-8 mx-5 cursor-pointer">Contacts</h2></li>
                    <li class="mt-3 flex items-center text-sm font-semibold "><i class="fas fa-user-cog left-0 float-left  right-0"></i> <h2 class=" float-left px-8 mx-5 cursor-pointer">Utilisateurs</h2></li>
                    <li class="mt-3 flex items-center text-sm font-semibold "><i class="fas fa-cart-arrow-down  float-left  right-0"></i> <a href="{{route('article-create-add')}}"><h2 class="float-left px-8 mx-5 cursor-pointer ">Articles</h2></a></li>
                </ul>
            </div>
            
        </nav>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-12">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                
                <x-jet-welcome />
            </div>
        </div>
        <script>
var mybutton = document.getElementById("mybtn-togger")
var mytogger = document.getElementById("mylateral_navbar")
var mynavcolor =document.getElementById('navcolor')

mytogger.getAttribute("navlateral","false")

mybutton.onclick =click
 function click(){
    mynavcolor.getAttribute('navcolor')
    if (mytogger.hasAttribute("navlateral") ) {
        mytogger.removeAttribute("navlateral")
        mytogger.style.width="250px"
        mynavcolor.removeAttribute("navcolor")
        console.log( mynavcolor)
        mynavcolor.classList.remove('text-indigo-300')
        mynavcolor.classList.add('text-white')
        mytogger.classList.remove("bg-gray-900")
        mytogger.style.backgroundColor="#034DFC"
       
    }
    else{
        mytogger.style.width="80px"
        mytogger.setAttribute( "navlateral","true")
        mytogger.style.removeProperty("background-color")
        mytogger.classList.add("bg-gray-900")
        mynavcolor.classList.add('text-indigo-300')
    }
}
        </script>
   
</x-app-layout>
