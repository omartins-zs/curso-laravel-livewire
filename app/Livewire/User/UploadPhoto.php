<?php

namespace App\Livewire\User;

use Livewire\Component;

class UploadPhoto extends Component
{
    public $photo;

    public function render()
    {
        return view('livewire.user.upload-photo');
    }

    public function storagePhoto()
    {
        dd("CXheugue");
    }
}
