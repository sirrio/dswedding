<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\UserRegistered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Str;

class AttendanceController extends Controller
{
    function store(Request $request)
    {
        $password = Str::random(12);

        User::create(
            [
                ...$request->validate([
                    'name' => 'required',
                    'email' => 'required|email|unique:users',
                    'isAttending' => 'required'
                ]),
                'password' => Hash::make($password)
            ]
        );

        Notification::route('mail', $request->email)->notify(new UserRegistered($password));

        return redirect()->back();
    }
}
