<?php

namespace App\Http\Livewire\Todo;

use App\Models\Todo;
use Livewire\Component;

class Item extends Component
{
    public Todo $todo;

    public function mounted(Todo $todo)
    {
        $this->todo = $todo;
    }

    public function render()
    {
        return view('livewire.todo.item');
    }
}
