<?php

namespace App\View\Components\Articles;

use Illuminate\View\Component;

class ArticleShow extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */


    public function render()
    {
         $articles = ["ordinateur",
        "écran ordinateur",
        "disque dure",
        "Mincraft",
    
    ];
        return view('components.articles.article-show' ,compact('articles'));
    }
}
