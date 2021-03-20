<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Repositories\User\UserRepositoryInterface;
use App\Models\User;

class Users extends Component
{
    public $users, $email, $password, $name;
    public $isOpen = 0;

//    private $userRepository;
//
//    public function __construct(UserRepositoryInterface $userRepository)
//    {
//        $this->userRepository = $userRepository;
//    }

    public function render()
    {
//        $users=$this->userRepository->getAll();


       $this->users = User::all();

        return view('livewire.users');
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'email' => 'required',
            'name' => 'required',
            'password' => 'required',
        ]);

        User::create($validatedDate);

        session()->flash('message', 'Post Created Successfully.');

        $this->resetInputFields();
    }
}
