<?php

namespace App\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public $title = 'Calculator';
    public $number1;
    public $number2;
    public string $operator = '+';
    public float $result = 0;
    public bool $disabled = false;

    public function calculate(){
        $num1 = (float)$this->number1;
        $num2 = (float)$this->number2;

        switch($this->operator){
            case '+':
                return $this->result = $num1 + $num2;
            case '-':
                return $this->result = $num1 - $num2;
            case '*':
                return $this->result = $num1 * $num2;
            case '/':
                return $this->result = $num1 / $num2;
            default:
                return 0;
        }
    }
    public function update($property){
        if($this->num1 === '' || $this->num2 === ''){
            return $this->disabled = true;
        }
        else{
            return $this->disabled = false;
        }
    }
    public function res(){
        if($this->result != 0){
            $this->number1 = '';
            $this->number2 = '';
            $this->result = 0;
        }
    }
    public function render()
    {
        return view('livewire.calculator');
    }

   
}
