<?php

namespace App\Http\Livewire\Posts;

use Livewire\Component;

class Filter extends Component
{
    public $research = "";

    public function updated()
    {
        $this->emit('researchUpdated', $this->research);
    }

    public function render()
    {
        return view('livewire.posts.filter');
    }
}
