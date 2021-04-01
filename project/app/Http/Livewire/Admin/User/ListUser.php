<?php

namespace App\Http\Livewire\Admin\User;

use Livewire\Component;
use App\Repositories\User\UserRepositoryInterface;
use App\Models\User;
use Livewire\WithPagination;

class ListUser extends Component
{
    use WithPagination;
    public $email, $password, $name;
    public $updateMode = false;
    // public $isOpen= false;
//    private $userRepository;
//
//    public function __construct(UserRepositoryInterface $userRepository)
//    {
//        $this->userRepository = $userRepository;
//    }

    public function render()
    {
//        $users=$this->userRepository->getAll();


    //    $this->users = User::paginate(10);

        return view('admin.entity.user.list-user',
        [
            'users' => User::orderBy('created_at', 'DESC')->paginate(10)
        ])->layout('layouts.admin');
    }

    private function resetInputFields()
    {
        $this->name = '';
        $this->email = '';
        $this->password = '';
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
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

    public function edit($id)
    {
        $post = User::findOrFail($id);
        $this->name = $id;
        $this->email = $post->email;
        $this->password = $post->password;

        $this->updateMode = true;
    }

    public function update()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'email' => 'required',
        ]);

        $user = User::find($this->id);
        $user->update([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        $this->updateMode = false;

        session()->flash('message', 'Post Updated Successfully.');
        $this->resetInputFields();
    }

    public function delete($id)
    {
        User::find($id)->delete();
        session()->flash('message', 'Post Deleted Successfully.');
    }
}
