<link rel="stylesheet" href="https://unpkg.com/tailwindcss/dist/tailwind.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
<!--Replace with your tailwind.css once created-->
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
<link rel="stylesheet" href="{{ mix('css/app.css') }}">
<link rel="stylesheet" href="{{ mix('css/coustom.css') }}">

<script src="{{ mix('js/app.js') }}" defer></script>
<div class="container mx-auto flex flex-wrap pt-4 pb-12 ">
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->

    @if ($article->id)
        <h2 class="w-full my-2 text-5xl font-bold leading-tight text-center text-gray-800"> {{ $article->name }}</h2>

        <div class="w-full mb-4">
            <div class="h-1 mx-auto gradient w-64 opacity-25 my-0 py-0 rounded-t"></div>
        </div>
        <div class=" grid grid-cols-1 md:grid-cols-2 md:gap-4 my-5">
            <div class=" block border border-collapse shadow-lg rounded-lg " >
                <img class=" w-1/3 p-2 " src="/img/{{ $article->image }}" alt="" style="background: #adff2f">
                <hr class=" border border-gray-500">
            </div>


            <div>
                <p>{{ $article->description }}</p>
                <p><strong>{{ number_format($article->price, 2, ',', ' ') }} € TTC</strong> </p>


            </div>


        </div>



    @endif


    <a href="/"> <button> continuer l'achat</button></a>
    @if (Route::has('login'))
        <a href="{{ route('login') }}"> <button> connexion</button></a>
    @endif
    @if (Route::has('register'))
        <a href="{{ route('register') }}" :active="true"
            class="  no-underline hover:text-gray-800 hover:text-underline py-2 px-4">Register</a>
    @endif
</div>
