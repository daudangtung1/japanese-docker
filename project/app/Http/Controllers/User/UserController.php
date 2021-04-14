<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\User\UserRepositoryInterface;

class UserController extends Controller
{
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function edit($id)
    {
        $users = $this->userRepository->findById($id);
        return view('edit', compact('users'));
    }

    public function getAll()
    {
        $getUsers = $this->userRepository->getAll();
        return view('user', compact('getUsers'));
    }

    public function index(){
//        dd(1);
    }
}
