<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $count = 1;
    public $number = 0;
    public $sayHello = "Hello Wolrd";
    public bool $disabled = false;

    public function increment()
    {
        $this->count++;
        $this->number++;
        
    }
 
    public function decrement()
    {
        $this->count--;
        $this->number--;
       
       
    }
   
    public function updated($property)
        {
            if ($this->number == 0) {
                $this->disabled = true;
            } else {
                $this->disabled = false;
            }
        }
    public function render()
    {
        return view('livewire.counter');
    }
}
