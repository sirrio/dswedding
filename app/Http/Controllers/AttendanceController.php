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

        $user = User::create(
            [
                ...$request->validate([
                    'name' => 'required',
                    'email' => 'required|email|unique:users',
                    'number' => 'required|integer|gt:0',
                    'isAttending' => 'required'
                ]),
                'password' => Hash::make($password)
            ]
        );

        $request->session()->flash('message', 'Erfolgreich angemeldet!');

        Notification::route('mail', $request->email)->notify(new UserRegistered($password));

        return redirect()->back();
    }
}
