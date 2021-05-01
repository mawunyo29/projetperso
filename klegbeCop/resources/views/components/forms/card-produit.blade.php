
<div>
    <!-- No surplus words or unnecessary actions. - Marcus Aurelius -->
    mon produit:  
    <p class="p-1"> {{$type}}</p>
    <p class="p-1"> {{$marque}}</p>
    <p class="p-1"> {{$name}}</p>
    <p class="p-1"> {{$label}}</p>
  
    <a href="/"> <button> continuer l'achat</button></a>
    @if (Route::has('login'))
        <a href="{{ route('login') }}"> <button> connexion</button></a>
    @endif
    @if (Route::has('register'))
        <a href="{{ route('register') }}" :active="true"
            class="  no-underline hover:text-gray-800 hover:text-underline py-2 px-4">Register</a>
    @endif
</div>
