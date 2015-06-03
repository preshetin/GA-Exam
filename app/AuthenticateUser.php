<?php namespace App;

use App\Repositories\UserRepository;
use Illuminate\Contracts\Auth\Guard;
use Laravel\Socialite\Contracts\Factory as Socialite;


class AuthenticateUser {

    /**
     * @var UserRepository
     */
    private $users;

    /**
     * @var Socialite
     */
    private $socialite;

    /**
     * @var Guard
     */
    private $auth;

    public function __construct(UserRepository $users, Socialite $socialite, Guard $auth)
    {
        $this->users = $users;
        $this->socialite = $socialite;
        $this->auth = $auth;
    }

    public function execute($provider, $hasCode, AuthenticateUserListener $listener)
    {
        if (! $hasCode ) return $this->getAuthorizationFirst($provider);

        $user = $this->users->findByUsernameOrCreate($provider, $this->getProviderUser($provider));

        $this->auth->login($user, true);

        return $listener->userHasLoggedIn($user);
    }

    private function getAuthorizationFirst($provider)
    {
        return \Socialite::driver($provider)->redirect();
    }

    private function getProviderUser($provider)
    {
//        dd($this->socialite->driver($provider)->user());

        return $this->socialite->driver($provider)->user();
    }

}