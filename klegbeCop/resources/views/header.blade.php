@extends('welcome')
@section('header')
<nav id="header" class="fixed w-full z-30 top-0  text-white mb-5 ">
    <div class=" container mx-auto flex flex-wrap items-center justify-between mt-0 py-2">
        <div class="pl-4 flex items-center mb">

            {{-- <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="/">
        <!--Icon from: http://www.potlabicons.com/ -->
        <svg class="h-8 fill-current inline" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.005 512.005">
          <rect fill="#2a2a31" x="16.539" y="425.626" width="479.767" height="50.502" transform="matrix(1,0,0,1,0,0)" />
          <path
            class="plane-take-off"
            d=" M 510.7 189.151 C 505.271 168.95 484.565 156.956 464.365 162.385 L 330.156 198.367 L 155.924 35.878 L 107.19 49.008 L 211.729 230.183 L 86.232 263.767 L 36.614 224.754 L 0 234.603 L 45.957 314.27 L 65.274 347.727 L 105.802 336.869 L 240.011 300.886 L 349.726 271.469 L 483.935 235.486 C 504.134 230.057 516.129 209.352 510.7 189.151 Z "
          />
        </svg>
       THE GOALS
      </a> --}}
            <a class="toggleColour text-white no-underline hover:no-underline font-bold text-2xl lg:text-4xl"
                href="/">
                <x-logos.logoklegbe></x-logos.logoklegbe>
                <span class="hidden lg:inline">
                    THE GOALS
                </span>


            </a>

            <div class="search-icon cursor-pointer pl-6 ">
                <button
                    class="toggleColour text-white flex items-center p-1  hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out "
                    id="search-toggle" onclick="checksearch()">
                    <svg class="fill-current pointer-events-none text-grey-darkest w-4 h-4 inline"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                        <path
                            d="M12.9 14.32a8 8 0 1 1 1.41-1.41l5.35 5.33-1.42 1.42-5.33-5.34zM8 14A6 6 0 1 0 8 2a6 6 0 0 0 0 12z">
                        </path>
                    </svg>
                    Searchy
                </button>
            </div>


        </div>

        <div class="block lg:hidden pr-4 mt-6">

            <button id="nav-toggle"
                class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <title>Menu</title>
                    <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                </svg>
            </button>
        </div>
        <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-gray-800 p-4 lg:p-0 z-10"
            id="nav-content">


            <ul class="list-reset lg:flex justify-end flex-1 items-center toggleColour text-white" id="navAction">
                <li class="mr-3">
                    <a class="inline-block py-2 px-4  font-bold no-underline" href="/"
                        :active="true">Active</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block  no-underline hover:text-gray-800 hover:text-underline py-2 px-4"
                        href="#action ">link</a>
                </li>
                <li class="mr-3">
                    <a class="inline-block  no-underline hover:text-gray-800 hover:text-underline py-2 px-4"
                        href="#title" :active="link2">link2</a>
                </li>
                <li class="mr-3  "   >
                    @if (Route::has('login'))

                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="inline-block  no-underline hover:text-gray-800 hover:text-underline py-2 px-4">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" :active="true"
                                class="  no-underline hover:text-gray-800 hover:text-underline py-2 px-4">Log
                                in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" :active="true"
                                    class="  no-underline hover:text-gray-800 hover:text-underline py-2 px-4">Register</a>
                            @endif
                        @endauth

                    @endif
                </li>
            </ul>
            {{-- <button
        id="navAction"
        class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full mt-4 lg:mt-0 py-4 px-8 shadow opacity-75 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out"
      >
        Action
      </button> --}}
        </div>
    </div>
    {{-- serach bar --}}

    <div class="relative w-full hidden  bg-white  shadow-2xl ring-1 border-t  border-collapse border-gray-400"
        id="search-content">
        <div class="container mx-auto py-4 text-gray-800">
            <input id="searchfield" type="search" placeholder="Search..." autofocus="autofocus"
                class="w-full text-grey-800 transition focus:outline-none focus:border-transparent  p-2 appearance-none leading-normal text-xl lg:text-2xl">
        </div>
        <script type="text/javascript">
            var selectInput = document.getElementById('search-toggle')
            var mysearch = document.getElementById('search-content')
            var searchfield =document.getElementById('searchfield')

            function checksearch() {

                if (selectInput) {

                    if (mysearch.classList.contains("hidden")) {
                        searchfield.style.border="none"
                        searchfield.style.webkitAppearance="none"
                        mysearch.classList.remove("hidden")
                    } else
                        mysearch.classList.add("hidden")

                }


            }

        </script>


    </div>
    <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
</nav>
@endsection