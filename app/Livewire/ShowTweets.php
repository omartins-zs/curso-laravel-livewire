<?php

namespace App\Livewire;

use App\Models\Tweet;
use Livewire\Component;

class ShowTweets extends Component
{
    public $content = "Apenas um teste";

    protected $rules = [
        'content' => 'required|min:3|max:255'
    ];

    public function render()
    {
        $tweets = Tweet::with('user')->paginate(2);

        return view('livewire.show-tweets', compact('tweets'));


        // return view('livewire.show-tweets', [
        //     'tweets' => $tweets
        // ]);
        // Se não mudar o Layout padrão do Livewire usar a linha abaixo
        // return view('livewire.show-tweets')->layout('layouts.app'); // Use a referência correta
    }

    public function create()
    {
        // dd($this->content);

        $this->validate();

        Tweet::create([
            'content' => $this->content,
            'user_id' => 1,
        ]);

        $this->content = '';
    }
}
