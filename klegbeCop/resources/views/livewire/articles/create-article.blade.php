
@foreach ($articles as $article)
@if ($article->id)
<div class=" w-full md:w-1/4 lg:w-1/6 h-1/3    text-black m-2 font-bold  text-sm   rounded shadow hover:shadow-lg outline-none focus:outline-none  my-2 ease-linear transition-all duration-150">
   
    <a   href="{{route('produit',$article->id)}}">
        
       
      
        
        <p class="p-1"> {{$marque}}</p>
        <hr class="my-2 border-b border-green-200">
        
        <div class=" flex flex-col p-1 items-center ">
            {{$name = $article->name}}
            {{$type}}
           
           <img class=" w-full h-1/3" src="./img/{{$article->image}}" alt="">
            
         <p><strong>{{  number_format($label =$article->price, 2, ',', ' ') }} € TTC</strong> </p> 
      
        </div>
        <hr class="my-3  ">
      
       
    </a>
  
 
</div>
@endif
@endforeach
