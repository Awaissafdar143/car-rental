<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use PhpParser\Node\Stmt\TryCatch;

class googleController extends Controller
{
    public function loginWithGoogle()
    {
        // dd( Socialite::driver('google'));
        return Socialite::driver('google')->redirect();
    }
    public function callbackFromGoogle()
    {
        try {
            $user = Socialite::driver('google')->user();
            $is_user = User::where('email', $user->getEmail())->first();
            if (!$is_user) {
                $saveUser = User::updateOrCreate(
                    [
                        'google_id' => $user->getId(),
                    ],
                    [
                        'name' => $user->getName(),
                        'email' => $user->getEmail(),
                        'password' => Hash::make($user->getName().'@'.$user->getId()),
                    ]
                );
            } else {
                $saveUser = User::where('email', $user->getEmail())->update([
                    'google_id' => $user->getId(),
                ]);
                User::where('email', $user->getEmail())->first();
            }
            Auth::login($saveUser);
            return redirect()->route('home');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
