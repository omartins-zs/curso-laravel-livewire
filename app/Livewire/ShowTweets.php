<?php

namespace App\Livewire;

use App\Models\Tweet;
use Livewire\Component;

class ShowTweets extends Component
{
    public $message = "Apenas um teste";

    public function render()
    {
        $tweets = Tweet::with('user')->get();

        return view('livewire.show-tweets', compact('tweets'));


        // return view('livewire.show-tweets', [
        //     'tweets' => $tweets
        // ]);
        // Se não mudar o Layout padrão do Livewire usar a linha abaixo
        // return view('livewire.show-tweets')->layout('layouts.app'); // Use a referência correta
    }

    public function create()
    {
        // dd($this->message);
        Tweet::create([
            'content' => $this->message,
            'user_id' => 1,
        ]);

        $this->message = '';
    }
}
