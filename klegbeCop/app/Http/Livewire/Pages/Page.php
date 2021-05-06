<?php

namespace App\Http\Livewire\Pages;

use App\Models\Page as ModelsPage;
use Livewire\Component;

class Page extends Component
{
    public ModelsPage $page;
    public $color;

    public function updatedPage(){


    }
    public function render()
    {
        return view('livewire.pages.page');
    }
}
