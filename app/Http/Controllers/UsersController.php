<?php

namespace App\Http\Controllers;

use App\Http\Requests\UsersRequest;
use App\Models\Users;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;


class UsersController extends Controller
{
    public function googleLogin()
    {
        return Socialite::driver('google')->redirect();
    }


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
            $newUser->save();


            auth()->login($newUser, true);
        }


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
}
