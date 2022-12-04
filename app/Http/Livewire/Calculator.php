<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Calculator extends Component
{
    public $math   = '';
    public $result = 0;

    public function render()
    {
        return view('livewire.calculator');
    }

    public function addMath($number)
    {
        $this->math .= $number;
    }
    
    public function operation($operation)
    {
        if ($operation == '=') {
            $this->result = eval('return ' . $this->math . ';');
        } else {
            $this->math .= $operation;
        }
    }

    public function clear()
    {
        $this->math = '';
        $this->result = 0;
    }
    
}
