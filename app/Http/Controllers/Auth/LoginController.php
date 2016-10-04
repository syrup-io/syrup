<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Socialite;
use Auth;
use App\User as User;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'logout']);
    }

    public function redirectToProvider($provider)
    {
        return Socialite::driver($provider)
            ->scopes(['user', 'read:org'])->redirect();
    }

    public function handleProviderCallback($provider)
    {
        $vcsUser = Socialite::driver($provider)->user();
        $user = User::where('email', $vcsUser->getEmail())->first();
        if (! $user) {
            $id = $vcsUser->getId();
            $user = User::create([
                'name' => $vcsUser->getName(),
                'email' => $vcsUser->getEmail(),
                'password' => Hash::make($id),
                'github_token' => $vcsUser->token,
                'github_avatar_url' => $vcsUser->user['avatar_url']
            ]);
        }
        Auth::login($user);
        return redirect()->action('HomeController@index');
    }
    public function logout() {
        Auth::logout();
        return redirect('home');
    }
}
