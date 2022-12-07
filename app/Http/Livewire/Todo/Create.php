<?php

namespace App\Http\Livewire\Todo;

use App\Http\Livewire\Todo as LivewireTodo;
use App\Models\Todo;
use Livewire\Component;

class Create extends Component
{
    public string $title = '';

    public function render()
    {
        return view('livewire.todo.create');
    }

    public function save()
    {
        $this->validate([
            'title' => [
                'required',
                'min:3',
                'max:100'
            ]
        ]);

        auth()->user()->todos()->create([
            'title' => $this->title,
        ]);

        $this->reset();
        $this->emitTo(LivewireTodo::class, 'todo::created');
    }
}
