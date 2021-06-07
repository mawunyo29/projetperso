<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <link href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">
    <!--Responsive Extension Datatables CSS-->
    <link href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/coustom.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="{{ mix('js/slidebar.js') }}" defer></script>

</head>

<body class="font-sans antialiased">
    <x-jet-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8 md:ml-24">

                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            <div class=" overflow-hidden  w-64 h-screen  py-8  border-r dark:bg-gray-800 dark:border-gray-600 md:text-xs uppercase  font-bold  md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl lateral_togger bg-white  items-center justify-between   px-6"
                id="mylateral_navbar" navlateral>


                <h2 class="text-3xl font-semibold text-gray-800 dark:text-white" id="brand">Brand</h2>
                <button id="mybtn-togger"
                    class=" ring-0  flex items-center -mx-2  bg-transparent  hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                    <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                    </svg>
                </button>

                <div class="flex flex-col  flex-1 mt-6 md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0   items-center justify-between w-full mx-auto"
                    navcolor id="navcolor">
                    <nav  id="nav_items" class="md:flex-col md:min-w-full md:flex flex-col flex-wrap list-none -mx-2  hidden" >



                        <hr class="my-2  md:min-w-full">

                        <a class="flex items-center px-4 py-2 text-gray-700 bg-gray-200 rounded-md dark:bg-gray-700 dark:text-gray-200"
                            href="#">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19 11H5M19 11C20.1046 11 21 11.8954 21 13V19C21 20.1046 20.1046 21 19 21H5C3.89543 21 3 20.1046 3 19V13C3 11.8954 3.89543 11 5 11M19 11V9C19 7.89543 18.1046 7 17 7M5 11V9C5 7.89543 5.89543 7 7 7M7 7V5C7 3.89543 7.89543 3 9 3H15C16.1046 3 17 3.89543 17 5V7M7 7H17"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                            <span class="mx-4 font-medium">Dashboard</span>
                        </a>
                        <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700"
                            href="#">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M16 7C16 9.20914 14.2091 11 12 11C9.79086 11 8 9.20914 8 7C8 4.79086 9.79086 3 12 3C14.2091 3 16 4.79086 16 7Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M12 14C8.13401 14 5 17.134 5 21H19C19 17.134 15.866 14 12 14Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                            <span class="mx-4 font-medium">Accounts</span>
                        </a>

                        <a class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700"
                            href="#">
                            <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15 5V7M15 11V13M15 17V19M5 5C3.89543 5 3 5.89543 3 7V10C4.10457 10 5 10.8954 5 12C5 13.1046 4.10457 14 3 14V17C3 18.1046 3.89543 19 5 19H19C20.1046 19 21 18.1046 21 17V14C19.8954 14 19 13.1046 19 12C19 10.8954 19.8954 10 21 10V7C21 5.89543 20.1046 5 19 5H5Z"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>

                            <span class="mx-4 font-medium">Tickets</span>
                        </a>

                        <a href="" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700">
                           
                           
                            <i
                            class="far fa-address-card  uppercase  text-lg font-bold block text-pink-500 hover:text-pink-600 "></i>
                              
                        <span class="mx-4 font-medium">Manager</span>
                        </a>

                        <a href="" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700">

                            <i
                            class="fas fa-tasks text-lg uppercase py-3 font-bold block text-pink-500 hover:text-pink-600   right-0"></i>
                            <span class="mx-4 font-medium">Projets</span>
                        </a>

                        <a href="" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700">

                            <i
                            class="fas fa-th text-lg uppercase py-3 font-bold block text-pink-500 hover:text-pink-600   right-0"></i>
                            <span class="mx-4 font-medium">Tables</span>
                        </a>

                        <a href="" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700">

                            <i
                            class="far fa-bell text-lg uppercase py-3 font-bold block text-pink-500 hover:text-pink-600   right-0"></i>
                            <span class="mx-4 font-medium">Tables</span>
                        </a>

                        <a href="" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700">

                            <i
                            class="fas fa-phone text-lg uppercase py-3 font-bold block text-pink-500 hover:text-pink-600   right-0"></i>
                            <span class="mx-4 font-medium">Contacts</span>
                        </a>

                        <a href="" class="flex items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700">

                            <i
                            class="fas fa-user-cog text-lg uppercase py-3 font-bold block text-pink-500 hover:text-pink-600   right-0"></i>
                            <span class="mx-4 font-medium">Utilisateurs</span>
                        </a>
                        <div href="" class="flex accordion items-center px-4 py-2 mt-5 text-gray-600 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700">

                            <i class="fas fa-folder-plus text-lg uppercase py-3 font-bold  text-pink-500 hover:text-pink-600   right-0"> </i>
                            <span class="mx-4 font-medium  "> Articles</span>
                            
                        </div>
                        <div class="panel items-center px-4 py-2  text-gray-600 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700">
                            <a href="{{ route('add_article') }}" class="  flex items-center py-2  text-gray-600 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700">
                                <input type="radio" name="" disabled id="" class=" opacity-50 bg-gray-400 ">
                                {{-- <i class="fas fa-folder-plus text-lg uppercase py-3 font-bold block"> </i> --}}
                                <span class="mx-4 font-medium  "> create article</span>
    
                                
                            </a>

                            <a href="{{ route('add_article') }}" class="  flex items-center  py-2  text-gray-600 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700">
                                <input type="radio" name="" disabled id="" class=" opacity-50 bg-gray-400 ">
                                {{-- <i class="fas fa-folder-plus text-lg uppercase py-3 font-bold block"> </i> --}}
                                <span class="mx-4 font-medium  "> create article</span>
    
                                
                            </a>

                            <a href="{{ route('add_article') }}" class="  flex items-center  py-2  text-gray-600 transition-colors duration-200 transform rounded-md dark:text-gray-400 hover:bg-gray-200 dark:hover:bg-gray-700 dark:hover:text-gray-200 hover:text-gray-700">
                                <input type="radio" name="" disabled id="" class=" opacity-50 bg-gray-400 ">
                                {{-- <i class="fas fa-folder-plus text-lg uppercase py-3 font-bold block"> </i> --}}
                                <span class="mx-4 font-medium  "> create article</span>
    
                                
                            </a>
                        </div>
                        
                     
                        
                    </nav>


                </div>


            </div>
            

            {{ $slot }}
        </main>
        <footer class="bg-white left-0 right-0">
            <div class="container mx-auto px-6">
                <div class="w-full flex flex-col md:flex-row py-6">
                    <div class="flex-1 mb-6 text-gray-800 ">

                        <a class="text-pink-600 no-underline hover:no-underline font-bold  text-2xl lg:text-4xl"
                            href="/">
                            <svg class="h-12 fill-current inline" viewBox="0 0 61 34"
                                xmlns="http://www.w3.org/2000/svg">
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
                                        <feColorMatrix type="matrix"
                                            values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                        <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow" />
                                        <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow"
                                            result="shape" />
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
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">FAQ</a>
                            </li>
                            <li class="mt-2 inline-block mr-2 md:block md:mr-0">
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">Help</a>
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
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">Terms</a>
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
                                <a href="#"
                                    class="no-underline hover:underline text-gray-800 hover:text-pink-500">Official
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
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>
