<?php namespace App\Repositories;

use App\User;

class UserRepository {

    public function findByUsernameOrCreate($provider, $userData)
    {
        $user = User::firstOrCreate([
           'provider_id' => $userData->id,
           'provider'    => $provider
        ]);

        $user->email    = $userData->email;
        $user->name     = $userData->name;
        $user->nickname = $userData->nickname;
        $user->avatar   = $userData->avatar;

        $user->save();

        return $user;
    }
}