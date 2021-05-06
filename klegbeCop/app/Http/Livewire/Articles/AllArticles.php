<?php

namespace App\Http\Livewire\Articles;

use App\Models\Article;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class AllArticles extends Component
{
    use WithFileUploads;
    public $color;
    public ?User $user;
    public ?Article $article;
    public $users;
    public $photos= [];
    public function mount($color = null)
    {
        if ($color != null) {
            $this->color = $color;
        }
    }

    public function save()
    {
        $this->validate([
            'photos.*' => 'image|max:1024|mimes:jpg,jpeg, pdf, png' // 1MB Max
        ]);

        foreach ($this->photos as $photo) {
            $photo->store('photos');
        }
    
    }
    public function render()
    {
        return view('livewire.articles.all-articles');
    }
   
    
}
