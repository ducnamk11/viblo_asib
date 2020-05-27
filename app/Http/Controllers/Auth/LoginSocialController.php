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
        'facebook', 'github', 'gitlab', 'bitbucket'
    ];

    protected function redirectToProvider(string $provider)
    {
        if (! in_array($provider, $this->socialAllows)) {
            return abort(404);
        }

        return Socialite::driver($provider)->redirect();
    }

    protected function handleProviderCallback(string $provider)
    {
        $socialUser = Socialite::driver($provider)->user();

        Auth::login(
            User::where('email', $socialUser->getEmail())->firstOrFail(), true
        );

        return redirect($this->redirectTo);
    }
}
