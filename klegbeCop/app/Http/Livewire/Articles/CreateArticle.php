<?php

namespace App\Http\Livewire\Articles;

use App\Models\Article;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Str;
class CreateArticle extends Component
{
    use WithFileUploads;
    public $name;
    public $type;
    public $label;
    public $marque;
    public $idy;
    public $photo;
    public ?Article $article;

    public function render()
    {
        $articles = Article::all();
        return view('livewire.articles.create-article', compact('articles'));
    }
 

  

    public function save()
    {
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
        ]);
        
        $this->photo->storePubliclyAs('photos', 'avatar', 's3');
    }

 
    public function createArticle(){

      
    }

    
}
