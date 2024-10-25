<?php

namespace App\Livewire;

use App\Models\Tweet;
use Livewire\Component;
use Livewire\WithPagination;

class ShowTweets extends Component
{
    use WithPagination;

    public $content = "Apenas um teste";

    protected $rules = [
        'content' => 'required|min:3|max:255'
    ];

    public function render()
    {
        $tweets = Tweet::with('user')->latest()->paginate(2);

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

        auth()->user()->tweets()->create([
            'content' => $this->content,
        ]);

        // Tweet::create([
        //     'content' => $this->content,
        //     'user_id' => auth()->user()->id,
        // ]);

        $this->content = '';
    }
    
    public function like($idtweet)
    {
        $tweet = Tweet::find($idtweet);

        $tweet->likes()->create([
            'user_id' => auth()->user()->id,
        ]);
    }
}
