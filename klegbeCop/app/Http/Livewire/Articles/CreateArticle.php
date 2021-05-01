<?php

namespace App\Http\Livewire\Articles;

use Livewire\Component;
use Livewire\WithFileUploads;

class CreateArticle extends Component
{
    use WithFileUploads;
    public $name;
    public $type;
    public $label;
    public $marque;
    public $idy;
    public $photo;

    public function render()
    {
        return view('livewire.articles.create-article');
    }
 

  

    public function save()
    {
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
        ]);
        
        $this->photo->storePublicly('photos');
    }
}
