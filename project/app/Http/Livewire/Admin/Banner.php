<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Banner as Banners;
use Livewire\WithFileUploads;

class Banner extends Component
{
    use WithFileUploads;

    public $createMode = false;
    public $title;
    public $caption;
    public $image;

    public function render()
    {
        $banners = Banners::all();
        return view('livewire.admin.banner',  compact('banners'))->layout('layouts.admin');
    }

    public function create()
    {
        $this->createMode = true;
    }

    public function store()
    {
        $validatedData = $this->validate([
            'title' => 'required',
            'caption' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1024',
        ]);
        $validatedData['image'] = $this->image->store('photos');

        Banners::create($validatedData);
        session()->flash('message', 'Post Created Successfully.');
    }
}
