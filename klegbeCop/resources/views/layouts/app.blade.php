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
        <main >
            <nav class="md:text-xs uppercase py-3 font-bold  md:block md:fixed md:top-0 md:bottom-0 md:overflow-y-auto md:flex-row md:flex-nowrap md:overflow-hidden shadow-xl lateral_togger bg-white flex flex-wrap items-center justify-between relative  z-10 px-6"
                id="mylateral_navbar" navlateral>
                <div class=" md:flex-col md:items-stretch md:min-h-full md:flex-nowrap px-0  flex flex-wrap items-center justify-between w-full mx-auto"
                    navcolor id="navcolor">

                    <button id="mybtn-togger"
                        class=" ring-0  flex items-center p-1  bg-transparent  hover:text-gray-900 focus:outline-none focus:shadow-outline transform transition hover:scale-105 duration-300 ease-in-out">
                        <svg class="fill-current h-6 w-6" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <title>Menu</title>
                            <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z" />
                        </svg>
                    </button>


                    <hr class="my-2 p-3 md:min-w-full">


                    <ul class=" md:flex-col md:min-w-full md:flex flex-col list-none  p-2 hidden " id="nav_items">

                        <li class="items-center text-sm font-semibold flex flex-row "><i
                                class="fas fa-home text-xs uppercase py-3 font-bold block text-pink-500 hover:text-pink-600    right-0">
                            </i>
                            <h2 class="  cursor-pointer p-10">Home</h2>
                        </li>
                        <li class="items-center text-sm font-semibold flex flex-row  " ><i
                                class="far fa-address-card  text-xs uppercase py-3 font-bold block text-pink-500 hover:text-pink-600 "></i>
                            <h2 class="  cursor-pointer p-10 ">Manager</h2>
                        </li>
                        <li class="items-center text-sm font-semibold flex flex-row "><i
                                class="fas fa-tasks text-xs uppercase py-3 font-bold block text-pink-500 hover:text-pink-600   right-0"></i>
                            <h2 class="  cursor-pointer p-10 ">Projets</h2>
                        </li>
                        <li class="items-center text-sm font-semibold flex flex-row "><i
                                class="fas fa-th text-xs uppercase py-3 font-bold block text-pink-500 hover:text-pink-600   right-0"></i>
                            <h2 class="  cursor-pointer p-10">Tables</h2>
                        </li>

                        <li class="items-center text-sm font-semibold flex flex-row  "><i
                                class="far fa-bell text-xs uppercase py-3 font-bold block text-pink-500 hover:text-pink-600   right-0"></i></i>
                            <h2 class="  cursor-pointer p-10 ">Notifications</h2>
                        </li>

                        <li class="items-center text-sm font-semibold flex flex-row "><i
                                class="fas fa-phone text-xs uppercase py-3 font-bold block text-pink-500 hover:text-pink-600   right-0"></i>
                            <h2 class=" cursor-pointer p-10">Contacts</h2>
                        </li>
                        <li class="items-center text-sm font-semibold flex flex-row "><i
                                class="fas fa-user-cog text-xs uppercase py-3 font-bold block text-pink-500 hover:text-pink-600   right-0"></i>
                            <h2 class="  cursor-pointer p-10">Utilisateurs</h2>
                        </li>
                        <li class="items-center text-sm font-semibold flex flex-row " ><i
                                class="fas fa-cart-arrow-down text-xs uppercase py-3 font-bold block text-pink-500 hover:text-pink-600"></i>
                            <a href="{{ route('add_article') }}">
                                <h2 class=" cursor-pointer p-10 ">Articles</h2>
                            </a>
                        </li>
                    </ul>

                </div>
                

            </nav>


            {{ $slot }}
        </main>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>
