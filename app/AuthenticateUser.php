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

    public function execute($hasCode, AuthenticateUserListener $listener)
    {
        if (! $hasCode ) return $this->getAuthorizationFirst();

        $user = $this->users->findByUsernameOrCreate($this->getGithubUser());

        $this->auth->login($user, true);

        return $listener->userHasLoggedIn($user);
    }

    private function getAuthorizationFirst()
    {
        return \Socialite::driver('github')->redirect();
    }

    private function getGithubUser()
    {
        return $this->socialite->driver('github')->user();
    }

}