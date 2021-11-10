<?php

namespace App\Http\Livewire\Front;

use Livewire\Component;

class IndexCard extends Component
{
    public string $data = "";

    public function loadCardData()
    {
        sleep(rand(0, 3));

        $this->data = "print";
    }

    public function render()
    {
        return view('livewire.front.index-card');
    }
}
