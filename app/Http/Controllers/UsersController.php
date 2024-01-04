<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersRequest;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class UsersController extends Controller
{
    public function googleLogin()
    {
        return Socialite::driver('google')->redirect();
    }

    // ...

    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();

        $existingUser = Users::where('google_id', $user->id)->first();

        if ($existingUser) {
            auth()->login($existingUser, true);
        } else {
            $newUser = new Users();
            $newUser->firstname = $user->user['given_name'] ?? '';
            $newUser->lastname = $user->user['family_name'] ?? '';
            $newUser->email = $user->email;
            $newUser->google_id = $user->id;
            $newUser->password = bcrypt(Str::random());

            // Save the avatar URL to the database
            $newUser->avatar_url = $user->avatar;

            $newUser->save();

            auth()->login($newUser, true);
        }

        // Now, you can use $user->avatar to display the image
        // or $newUser->avatar_url if you want to display it after login

        return redirect()->intended('/dashboard');
    }

    public function create(UsersRequest $request)
    {

        $users = new Users();
        $users->firstname = $request->firstname;
        $users->lastname = $request->lastname;
        $users->email = $request->email;
        $users->password = $request->password;
        $users->save();

        return redirect('/login')->with('message', 'User created successfully!');

    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}
