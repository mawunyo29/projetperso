<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>
        THE GOALS home page
    </title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" />
    <!--Replace with your tailwind.css once created-->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

   
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ mix('js/coustom.js') }}" defer></script>
    <!-- Define your gradient here - use online tools to find a gradient matching your branding-->
    <style>
        .gradient {
            background: linear-gradient(110deg, #1c09c7 0%, #4ca4f7 100%);

        }
        html body{
            margin: 0;
            padding: 0;
            height: 100%;
        }

    </style>
</head>

<body class="leading-normal tracking-normal text-white gradient">
    <!--Nav-->
    <nav id="header" class="fixed w-full z-30 top-0 bg-gray-300 text-white mb-5 ">
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

            <div class="block lg:hidden pr-4">

                <button id="nav-toggle"
                    class="flex items-center p-1 text-pink-800 hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>
            </div>
            <div class="w-full flex-grow lg:flex lg:items-center lg:w-auto hidden mt-2 lg:mt-0 bg-white lg:bg-transparent text-black p-4 lg:p-0 z-20"
                id="nav-content">


                <ul class="list-reset lg:flex justify-end flex-1 items-center">
                    <li class="mr-3">
                        <a class="inline-block py-2 px-4 text-black font-bold no-underline" href="/"
                            :active="request()->routeIs('Active')">Active</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4"
                            href="#action ">link</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4"
                            href="#title" :active="link2">link2</a>
                    </li>
                    <li class="mr-3">
                        @if (Route::has('login'))

                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4">Dashboard</a>
                            @else
                                <a href="{{ route('login') }}" :active="request()->routeIs('login')"
                                    class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4">Log
                                    in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" :active="request()->routeIs('register')"
                                        class="inline-block text-black no-underline hover:text-gray-800 hover:text-underline py-2 px-4">Register</a>
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

        <div class="relative w-full hidden i bg-white  shadow-2xl ring-1 border-t  border-collapse border-gray-400"
            id="search-content">
            <div class="container mx-auto py-4 text-black">
                <input id="searchfield" type="search" placeholder="Search..." autofocus="autofocus"
                    class="w-full text-grey-800 transition focus:outline-none focus:border-transparent p-2 appearance-none leading-normal text-xl lg:text-2xl">
            </div>
            <script type="text/javascript">
                var selectInput = document.getElementById('search-toggle');
                var mysearch = document.getElementById('search-content');

                function checksearch() {

                    if (selectInput) {

                        if (mysearch.classList.contains("hidden")) {

                            mysearch.classList.remove("hidden")
                        } else
                            mysearch.classList.add("hidden")

                    }


                }

            </script>


        </div>
        <hr class="border-b border-gray-100 opacity-25 my-0 py-0" />
    </nav>

    {{-- @yield('name') --}}
    @yield('content')

    <!--Hero-->
    <div class="pt-24 right-0 left-0">

        <div class="container  mx-auto flex flex-wrap flex-col md:flex-row items-center">
            <!--Left Col-->
            <div class="flex flex-col w-full md:w-2/5 justify-center items-start text-center p-2 md:text-left">
                <p class="uppercase tracking-loose w-full">What business are you?</p>
                <h1 class="my-4 text-5xl font-bold leading-tight">
                    Main Hero Message to sell yourself!
                </h1>
                <p class="leading-normal text-2xl mb-8">
                    Sub-hero message, not too long and not too short. Make it just right!
                </p>
                <button
                    class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    Subscribe
                </button>
            </div>
           
            <div class="hidden overflow-x-hidden overflow-y-auto fixed inset-0 z-50 outline-none focus:outline-none justify-center items-center"
                id="large-modal-id">
                <div class="relative w-auto my-6 mx-auto max-w-6xl">
                    <!--content-->
                    <div
                        class="border-0 rounded-lg shadow-lg relative flex flex-col w-full bg-white outline-none focus:outline-none">
                        <!--header-->
                        <div
                            class="flex items-start justify-between p-5 border-b border-solid border-blueGray-200 rounded-t">
                            <h3 class="text-3xl font-semibold">
                                Modal Title
                            </h3>
                            <button
                                class="p-1 ml-auto bg-transparent border-0 text-black opacity-5 float-right text-3xl leading-none font-semibold outline-none focus:outline-none"
                                onclick="toggleModal('large-modal-id')">
                                <span
                                    class="bg-transparent text-black opacity-50 h-6 w-6 text-2xl block outline-none focus:outline-none">
                                    ×
                                </span>
                            </button>
                        </div>
                        <!--body-->
                        <div class="relative p-6 flex-auto">
                            <p class="my-4 text-blueGray-500 text-lg leading-relaxed text-gray-900">
                                I always felt like I could do anything. That’s the main
                                thing people are controlled by! Thoughts- their perception
                                of themselves! They're slowed down by their perception of
                                themselves. If you're taught you can’t do anything, you
                                won’t do anything. I was taught I could do everything.
                            </p>
                        </div>
                        <!--footer-->
                        <div
                            class="flex items-center justify-end p-6 border-t border-solid border-blueGray-200 rounded-b">
                            <button
                                class="text-red-500 background-transparent font-bold uppercase px-6 py-2 text-sm outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                type="button" onclick="toggleModal('large-modal-id')">
                                Close
                            </button>
                            <button
                                class="bg-emerald-500 text-green-400 active:bg-emerald-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                                type="button" onclick="toggleModal('large-modal-id')">
                                Save Changes
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hidden opacity-25 fixed inset-0 z-40 bg-black" id="large-modal-id-backdrop"></div>
            <script type="text/javascript">
                function toggleModal(modalID) {
                    document.getElementById(modalID).classList.toggle("hidden");
                    document.getElementById(modalID + "-backdrop").classList.toggle("hidden");
                    document.getElementById(modalID).classList.toggle("flex");
                    document.getElementById(modalID + "-backdrop").classList.toggle("flex");
                }

            </script>

            <!--Right Col-->

        </div>
    </div>
    {{-- <div class="relative -mt-12 lg:-mt-24">

       
    </div> --}}
    {{-- section articles --}}
    <section class="bg-white border-b py-8  mx-auto ">
        
        <div class="container mx-auto items-center">
            <div class="flex justify-evenly  items-center m-2">
                <button
                class="bg-pink-500 text-white active:bg-pink-600 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                type="button" onclick="toggleModal('large-modal-id')">
                Open large modal
            </button> 
            </div>
           
            <div class="flex flex-wrap items-center justify-evenly">
                <div class=" w-full md:w-1/4 lg:w-1/6 lg:h-96 m-2 h-72  p-5 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                    <div class=" h-5 border-b border-green-200"></div>
                    <div class="mt-5 p-2 flex flex-col items-center ">
                        <button class="bg-blue-500 rounded-md p-2 bottom-0 absolute "> add to card</button>
                    </div>
    
                </div>
                <div class=" w-full md:w-1/4 lg:w-1/6 lg:h-96 m-2 h-72  p-5 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                    <div class=" h-5 border-b border-green-200"></div>
                    <div class="mt-5 p-2 flex flex-col items-center ">
                        <button class="bg-blue-500 rounded-md p-2 bottom-0 absolute "> add to card</button>
                    </div>
    
                </div>
                <div class=" w-full md:w-1/4 lg:w-1/6 lg:h-96 m-2 h-72  p-5 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                    <div class=" h-5 border-b border-green-200"></div>
                    <div class="mt-5 p-2 flex flex-col items-center">
                        <button class="bg-blue-500 rounded-md p-2 bottom-0 absolute"> add to card</button>
                    </div>
    
                </div>
                <div class=" w-full md:w-1/4 lg:w-1/6 lg:h-96 m-2 h-72  p-5 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                    <div class=" h-5 border-b border-green-200"></div>
                    <div class="mt-5 p-2 flex flex-col items-center">
                        <button class="bg-blue-500 rounded-md p-2 bottom-0 absolute"> add to card</button>
                    </div>
    
                </div>
                <div class=" w-full md:w-1/4 lg:w-1/6 lg:h-96 m-2 h-72  p-5 font-bold uppercase text-sm px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150">
                    <div class=" h-5 border-b border-green-200"></div>
                    <div class="mt-5 p-2 flex flex-col items-center">
                        <button class="bg-blue-500 rounded-md p-2 bottom-0 absolute"> add to card</button>
                    </div>
    
                </div>
            </div>
        </div>
    </section>
    <section class="bg-white border-b py-8 w-full left-0 right-0">

        <div class="container  max-w-5xl mx-auto m-8">
            <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                Title
            </h1>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <div class="flex flex-wrap">
                <div class="w-5/6 sm:w-1/2 p-6">
                    <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                        Lorem ipsum dolor sit amet
                    </h3>
                    <p class="text-gray-600 mb-8">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo
                        posuere et sit amet ligula.
                        <br />
                        <br />

                        Images from:

                        <a class="text-pink-500 underline" href="https://undraw.co/">undraw.co</a>
                    </p>
                </div>

                <div class="w-full sm:w-1/2 p-6">
                    <x-logos.logoOrdinateur></x-logos.logoOrdinateur>

                </div>
            </div>
            <div class="flex flex-wrap flex-col-reverse sm:flex-row">
                <div class="w-full sm:w-1/2 p-6 mt-6">
                    <x-articles.connectWord></x-articles.connectWord>
                </div>
                <div class="w-full sm:w-1/2 p-6 mt-6">
                    <div class="align-middle">
                        <h3 class="text-3xl text-gray-800 font-bold leading-none mb-3">
                            Lorem ipsum dolor sit amet
                        </h3>
                        <p class="text-gray-600 mb-8">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo
                            posuere et sit amet ligula.
                            <br />
                            <br />
                            Images from:

                            <a class="text-pink-500 underline" href="https://undraw.co/">undraw.co</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="bg-white border-b py-8 w-full left-0 right-0">
        <div class="container mx-auto flex flex-wrap pt-4 pb-12">
            <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800" id="title">
                Title
            </h1>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                        <p class="w-full text-gray-600 text-xs md:text-sm px-6">
                            xGETTING STARTED
                        </p>
                        <div class="w-full font-bold text-xl text-gray-800 px-6">
                            Lorem ipsum dolor sit amet.
                        </div>
                        <p class="text-gray-800 text-base px-6 mb-5">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo
                            posuere et sit amet ligula.
                        </p>
                    </a>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6" id="action">
                    <div class="flex items-center justify-start">
                        <button
                            class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            Action
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                        <p class="w-full text-gray-600 text-xs md:text-sm px-6">
                            xGETTING STARTED
                        </p>
                        <div class="w-full font-bold text-xl text-gray-800 px-6">
                            Lorem ipsum dolor sit amet.
                        </div>
                        <p class="text-gray-800 text-base px-6 mb-5">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo
                            posuere et sit amet ligula.
                        </p>
                    </a>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                    <div class="flex items-center justify-center">
                        <button
                            class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            Action
                        </button>
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3 p-6 flex flex-col flex-grow flex-shrink">
                <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                    <a href="#" class="flex flex-wrap no-underline hover:no-underline">
                        <p class="w-full text-gray-600 text-xs md:text-sm px-6">
                            xGETTING STARTED
                        </p>
                        <div class="w-full font-bold text-xl text-gray-800 px-6">
                            Lorem ipsum dolor sit amet.
                        </div>
                        <p class="text-gray-800 text-base px-6 mb-5">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam at ipsum eu nunc commodo
                            posuere et sit amet ligula.
                        </p>
                    </a>
                </div>
                <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                    <div class="flex items-center justify-end">
                        <button
                            class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                            Action
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="bg-gray-100 py-8 left-0 right-0">
        <div class="container mx-auto px-2 pt-4 pb-12 text-gray-800">
            <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800">
                Pricing
            </h1>
            <div class="w-full mb-4">
                <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
            </div>
            <div class="flex flex-col sm:flex-row justify-center pt-12 my-12 sm:my-4">
                <div class="flex flex-col w-5/6 lg:w-1/4 mx-auto lg:mx-0 rounded-none lg:rounded-l-lg bg-white mt-4">
                    <div class="flex-1 bg-white text-gray-600 rounded-t rounded-b-none overflow-hidden shadow">
                        <div class="p-8 text-3xl font-bold text-center border-b-4">
                            Free
                        </div>
                        <ul class="w-full text-center text-sm">
                            <li class="border-b py-4">Thing</li>
                            <li class="border-b py-4">Thing</li>
                            <li class="border-b py-4">Thing</li>
                        </ul>
                    </div>
                    <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                        <div class="w-full pt-6 text-3xl text-gray-600 font-bold text-center">
                            £0
                            <span class="text-base">for one user</span>
                        </div>
                        <div class="flex items-center justify-center">
                            <button
                                class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                Sign Up
                            </button>
                        </div>
                    </div>
                </div>
                <div
                    class="flex flex-col w-5/6 lg:w-1/3 mx-auto lg:mx-0 rounded-lg bg-white mt-4 sm:-mt-6 shadow-lg z-10">
                    <div class="flex-1 bg-white rounded-t rounded-b-none overflow-hidden shadow">
                        <div class="w-full p-8 text-3xl font-bold text-center">Basic</div>
                        <div class="h-1 w-full gradient my-0 py-0 rounded-t"></div>
                        <ul class="w-full text-center text-base font-bold">
                            <li class="border-b py-4">Thing</li>
                            <li class="border-b py-4">Thing</li>
                            <li class="border-b py-4">Thing</li>
                            <li class="border-b py-4">Thing</li>
                        </ul>
                    </div>
                    <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                        <div class="w-full pt-6 text-4xl font-bold text-center">
                            £x.99
                            <span class="text-base">/ per user</span>
                        </div>
                        <div class="flex items-center justify-center">
                            <button
                                class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                Sign Up
                            </button>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col w-5/6 lg:w-1/4 mx-auto lg:mx-0 rounded-none lg:rounded-l-lg bg-white mt-4">
                    <div class="flex-1 bg-white text-gray-600 rounded-t rounded-b-none overflow-hidden shadow">
                        <div class="p-8 text-3xl font-bold text-center border-b-4">
                            Pro
                        </div>
                        <ul class="w-full text-center text-sm">
                            <li class="border-b py-4">Thing</li>
                            <li class="border-b py-4">Thing</li>
                            <li class="border-b py-4">Thing</li>
                        </ul>
                    </div>
                    <div class="flex-none mt-auto bg-white rounded-b rounded-t-none overflow-hidden shadow p-6">
                        <div class="w-full pt-6 text-3xl text-gray-600 font-bold text-center">
                            £x.99
                            <span class="text-base">/ per user</span>
                        </div>
                        <div class="flex items-center justify-center">
                            <button
                                class="mx-auto lg:mx-0 hover:underline gradient text-white font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                                Sign Up
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Change the colour #f8fafc to match the previous section colour -->

    <section class="container mx-auto text-center py-6 mb-12 right-0 left-0">
        <h1 class="w-full my-2 text-5xl font-bold leading-tight text-center text-white">
            Call to Action
        </h1>
        <div class="w-full mb-4">
            <div class="h-1 mx-auto bg-white w-1/6 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <h3 class="my-4 text-3xl leading-tight">
            Main Hero Message to sell yourself!
        </h3>
        <button
            class="mx-auto lg:mx-0 hover:underline bg-white text-gray-800 font-bold rounded-full my-6 py-4 px-8 shadow-lg focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
            Action!
        </button>
    </section>
    <!--Footer-->
    <footer class="bg-white left-0 right-0">
        <div class="container mx-auto px-8">
            <div class="w-full flex flex-col md:flex-row py-6">
                <div class="flex-1 mb-6 text-black">
                    {{-- <a class="text-pink-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="#">
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
                    <a class="text-pink-600 no-underline hover:no-underline font-bold text-2xl lg:text-4xl" href="/">
                        <svg class="h-12 fill-current inline" viewBox="0 0 61 34" xmlns="http://www.w3.org/2000/svg">
                            <rect fill="#2a2a31" x="16.539" y="425.626" width="479.767" height="50.502"
                                transform="matrix(1,0,0,1,0,0)" />
                            <path
                                d="M6.364 17.332V13.948L18.028 0.987998H21.34L6.364 17.332ZM4.06 25V0.987998H6.652V25H4.06ZM10.396 11.464L22.168 25H18.568L8.452 13.228L10.396 11.464ZM11.7381 25V0.987998H14.3301V22.48H26.6061V25H11.7381ZM16.1819 25V0.987998H31.3379V3.436H18.7739V11.716H29.8259V14.236H18.7739V22.552H31.3379V25H16.1819ZM32.9238 25.36C30.4518 25.36 28.3878 24.904 26.7318 23.992C25.0998 23.056 23.8638 21.676 23.0238 19.852C22.2078 18.004 21.7998 15.712 21.7998 12.976C21.7998 10.24 22.2078 7.96 23.0238 6.136C23.8638 4.312 25.0998 2.944 26.7318 2.032C28.3878 1.12 30.4518 0.663998 32.9238 0.663998C34.2438 0.663998 35.5398 0.795998 36.8118 1.06C38.0838 1.324 39.3078 1.732 40.4838 2.284V4.984C39.3558 4.48 38.1798 4.048 36.9558 3.688C35.7318 3.304 34.4838 3.112 33.2118 3.112C31.1718 3.112 29.5038 3.472 28.2078 4.192C26.9118 4.888 25.9518 5.968 25.3278 7.432C24.7038 8.872 24.3918 10.72 24.3918 12.976C24.3918 15.232 24.7038 17.092 25.3278 18.556C25.9518 20.02 26.9118 21.112 28.2078 21.832C29.5038 22.528 31.1718 22.876 33.2118 22.876C34.1718 22.876 35.1078 22.804 36.0198 22.66C36.9318 22.516 37.8318 22.3 38.7198 22.012V15.172H32.9238V12.652H41.3118V23.488C39.9918 24.112 38.6238 24.58 37.2078 24.892C35.8158 25.204 34.3878 25.36 32.9238 25.36ZM33.0147 25V0.987998H40.9707C43.0347 0.987998 44.6427 1.288 45.7947 1.888C46.9707 2.464 47.7867 3.244 48.2427 4.228C48.7227 5.212 48.9627 6.28 48.9627 7.432C48.9627 8.464 48.8067 9.28 48.4947 9.88C48.1827 10.456 47.7987 10.924 47.3427 11.284C46.8867 11.644 46.4667 12.016 46.0827 12.4L45.7947 11.932C46.4187 12.148 47.0907 12.508 47.8107 13.012C48.5307 13.492 49.1427 14.164 49.6467 15.028C50.1507 15.868 50.4027 16.924 50.4027 18.196C50.4027 19.804 50.0547 21.112 49.3587 22.12C48.6627 23.104 47.6547 23.836 46.3347 24.316C45.0387 24.772 43.4907 25 41.6907 25H33.0147ZM35.6067 22.588H41.9067C42.9387 22.588 43.8987 22.48 44.7867 22.264C45.6987 22.048 46.4307 21.616 46.9827 20.968C47.5347 20.296 47.8107 19.324 47.8107 18.052C47.8107 17.092 47.6307 16.336 47.2707 15.784C46.9107 15.208 46.4307 14.788 45.8307 14.524C45.2547 14.236 44.6067 14.056 43.8867 13.984C43.1907 13.888 42.4947 13.84 41.7987 13.84H35.6067V22.588ZM35.6067 11.392H41.5467C42.3147 11.392 43.0707 11.32 43.8147 11.176C44.5587 11.008 45.1707 10.66 45.6507 10.132C46.1307 9.58 46.3707 8.74 46.3707 7.612C46.3707 5.98 45.9147 4.888 45.0027 4.336C44.0907 3.76 42.8307 3.472 41.2227 3.472H35.6067V11.392ZM41.2202 25V0.987998H56.3762V3.436H43.8122V11.716H54.8642V14.236H43.8122V22.552H56.3762V25H41.2202Z" />

                            <defs>
                                <filter id="filter0_d" x="0.0599976" y="0.664001" width="60.3162" height="32.696"
                                    filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                    <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                    <feColorMatrix in="SourceAlpha" type="matrix"
                                        values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" />
                                    <feOffset dy="4" />
                                    <feGaussianBlur stdDeviation="2" />
                                    <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                    <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
                                    <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow" result="shape" />
                                </filter>
                            </defs>
                        </svg>
                        THE GOALS

                    </a>
                </div>
                <div class="flex-1">
                    <p class="uppercase text-gray-500 md:mb-6">Links</p>
                    <ul class="list-reset mb-6">
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">FAQ</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Help</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#"
                                class="no-underline hover:underline text-gray-800 hover:text-pink-500">Support</a>
                        </li>
                    </ul>
                </div>
                <div class="flex-1">
                    <p class="uppercase text-gray-500 md:mb-6">Legal</p>
                    <ul class="list-reset mb-6">
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Terms</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#"
                                class="no-underline hover:underline text-gray-800 hover:text-pink-500">Privacy</a>
                        </li>
                    </ul>
                </div>
                <div class="flex-1">
                    <p class="uppercase text-gray-500 md:mb-6">Social</p>
                    <ul class="list-reset mb-6">
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#"
                                class="no-underline hover:underline text-gray-800 hover:text-pink-500">Facebook</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#"
                                class="no-underline hover:underline text-gray-800 hover:text-pink-500">Linkedin</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#"
                                class="no-underline hover:underline text-gray-800 hover:text-pink-500">Twitter</a>
                        </li>
                    </ul>
                </div>
                <div class="flex-1">
                    <p class="uppercase text-gray-500 md:mb-6">Company</p>
                    <ul class="list-reset mb-6">
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">Official
                                Blog</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#" class="no-underline hover:underline text-gray-800 hover:text-pink-500">About
                                Us</a>
                        </li>
                        <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                            <a href="#"
                                class="no-underline hover:underline text-gray-800 hover:text-pink-500">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
       
    </footer>
    @stack('modals')

    @livewireScripts
</body>

</html>
