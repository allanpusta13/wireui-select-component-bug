<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Test extends Component
{
    public $model;

    public function selectOptionsSample()
    {
        return collect();
    }

    public function render()
    {
        return view('livewire.test');
    }
}
