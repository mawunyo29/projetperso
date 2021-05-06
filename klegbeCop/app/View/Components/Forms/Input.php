<?php

namespace App\View\Components\Forms;

use Illuminate\View\Component;

class Input extends Component
{
    /** 
     * déclaration des attribus de mon input
     * 
     */
    public $name;
    public $type;
    public $label;
    public $marque;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $name ,$type, $label,$marque)
    {
        //
        $this->name = $name;
        $this->type = $type;
        $this->label = $label;
        $this->marque = $marque;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        
        return view('components.forms.input');
    }
}
