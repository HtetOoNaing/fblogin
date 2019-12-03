<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Socialite;

class FbLoginController extends Controller
{
    //
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->stateless()->user();
        dd($user);
        // $user->token;
    }
}
