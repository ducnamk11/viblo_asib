<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

/**
 * @see https://laravel.com/docs/6.x/socialite
 */
class LoginSocialController extends LoginController
{
    /**
     * For provider is supported
     * @see https://laravel.com/docs/6.x/socialite
     *
     * @var array
     */
    protected $socialAllows = [
        'facebook', 'github', 'google', 'bitbucket'
    ];

    protected function redirectToProvider(string $provider)
    {
        if (!in_array($provider, $this->socialAllows)) {
            return abort(404);
        }
        return Socialite::driver($provider)->redirect();
    }

    protected function handleProviderCallback(string $provider)
    {
        $getInfo = Socialite::driver($provider)->user();
        $user = $this->createUser($getInfo, $provider);
        auth()->login($user);
        return redirect($this->redirectTo);
    }

    function createUser($getInfo, $provider)
    {
        $user = User::where('provider_id', $getInfo->id)->first();
        if (!$user) {
            $user = User::create([
                'name' => $getInfo->name,
                'email' => $getInfo->email,
                'provider' => $provider,
                'provider_id' => $getInfo->id,
                'avatar' => 'default.png',
            ]);
        }
        return $user;
    }
}

