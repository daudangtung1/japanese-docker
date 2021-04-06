<?php

namespace App\Http\Livewire\Admin\Banner;

use Livewire\Component;
use Livewire\WithFileUploads;


class Banner extends Component
{
    use WithFileUploads;
    public $image;
    public $data;

    public function render()
    {
        $data = \App\Models\Banner::all();
        return view('livewire.admin.banner.banner', compact('data'))->layout('layouts.admin');
    }

    public function save()
    {
        $this->validate([
            'photo' => 'image|max:1024',
        ]);
        $this->image->store('images');
    }
}
