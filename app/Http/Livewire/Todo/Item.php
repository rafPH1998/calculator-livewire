<?php

namespace App\Http\Livewire\Todo;

use App\Http\Livewire\Todo as LivewireTodo;
use App\Models\Todo;
use Livewire\Component;

class Item extends Component
{
    public Todo $todo;

    protected $rules = [
        'todo.checked' => 'boolean'
    ];

    public function render()
    {
        return view('livewire.todo.item');
    }

    public function updated()
    {
        $this->todo->save();
        $this->emitTo( LivewireTodo::class, 'todo::updated');
    }



}
