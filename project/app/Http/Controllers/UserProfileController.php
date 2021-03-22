<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Laravel\Jetstream\Http\Controllers\Livewire\UserProfileController as UserProfileControllerVendor;

class UserProfileController extends UserProfileControllerVendor
{
    
    /**
     * Show the user profile screen.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function show(Request $request)
    {
        if(session('user_type') === 'ADM'){
            return view('profile.admin-show', [
                'request' => $request,
                'user' => $request->user(),
            ]);
        }
        return view('profile.show', [
            'request' => $request,
            'user' => $request->user(),
            dd(1);
        ]);
    }
}
