<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;

class Counter extends Component
{
    public $name ;
    public $isSet  ;
    public $count  ;

    public function mount()
    {
        //$this->name = $request->input('name');Request $request as arg
        $this->name = "Slimani" ;
        $this->isSet = false ;
        $this->count = 0 ;
    }

    public function hydrate()
    {
        $this->name = "mouhcine";
    }


    public function updatedName()
    {
        $this->count++ ;
    }

    public function increment()
    {
        return $this->count ++ ;
    }

    public function decrement()
    {
        return $this->count -- ;
    }
    public function render()
    {
        return view('livewire.counter');
    }
}