<?php

namespace App\Http\Livewire;

use App\Models\Todo as ModelsTodo;
use Livewire\Component;

class Todo extends Component
{
    public string $filter = 'all';

    public function render()
    {
        return view('livewire.todo', [
            'todos' => ModelsTodo::query()
                ->when($this->filter == 'done', fn($query) => $query->where('checked', true))
                ->when($this->filter == 'pending', fn($query) => $query->where('checked', false))
                ->orderBy('checked')
                ->get()
        ]);
    }
}
