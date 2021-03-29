<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Notifications\Notification;
use App\Notifications\ExamNotification;

class NotificationController extends Controller
{
    public function index()
    {
        return view('home');
    }
}
