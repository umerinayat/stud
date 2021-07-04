<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Validator, Redirect, Response, File;
use Socialite;
use App\Models\User;
use Illuminate\Support\Str;


class SocialController extends Controller
{

    public function redirect($provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {

        $getInfo = Socialite::driver($provider)->user();

        $user = $this->createUser($getInfo, $provider);

        auth()->login($user);

        return redirect()->to('/dashboard');
    }

    function createUser($getInfo, $provider)
    {

        $user = User::where('provider_id', $getInfo->id)->first();

        if (!$user) {
            $user = User::create([
                'name'     => $getInfo->name,
                'email'    => $getInfo->email,
                'email_verified_at' => now(),
                'remember_token' => Str::random(10),
                'provider' => $provider,
                'provider_id' => $getInfo->id
            ]);
        }
        return $user;
    }
}
