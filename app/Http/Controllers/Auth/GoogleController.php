<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;

use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;



class GoogleController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();

        // return Socialite::driver('google')->redirect()
        //     ->with(['prompt' => 'select_account']);

    }

    public function callback()
    {
        $googleUser = Socialite::driver('google')->user();

        // $user = User::updateOrCreate(
        //     ['email' => $googleUser->getEmail()],
        //     [
        //         'name' => $googleUser->getName(),
        //         'google_id' => $googleUser->getId()
        //     ]
        // );

        // // 🔑 STORE IN SESSION (this is what you're missing)
        // session([
        //     'user' => $user->name,
        //     'role' => $user->role ?? 'user'
        // ]);

        return redirect('/main');
    }
}
