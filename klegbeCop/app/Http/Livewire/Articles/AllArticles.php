<?php

namespace App\Http\Livewire\Articles;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;

class AllArticles extends Component
{
    use WithFileUploads;
    public $color;
    public ?User $user;
    public $users;
    public $photo;
    public function mount($color = null)
    {
        if ($color != null) {
            $this->color = $color;
        }
    }

    public function save()
    {
        $this->validate([
            'photo' => 'image|max:1024', // 1MB Max
        ]);

        $this->photo->store('photos');
    }
    public function render()
    {
        return view('livewire.articles.all-articles');
    }
}
