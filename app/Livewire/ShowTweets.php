<?php

namespace App\Livewire;

use Livewire\Component;

class ShowTweets extends Component
{
    public $message = "Apenas um teste";

    public function render()
    {
        return view('livewire.show-tweets');
        // Se não mudar o Layout padrão do Livewire usar a linha abaixo
        // return view('livewire.show-tweets')->layout('layouts.app'); // Use a referência correta
    }
}
