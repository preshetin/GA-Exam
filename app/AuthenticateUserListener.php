<?php
/**
 * Created by PhpStorm.
 * User: petrreshetin
 * Date: 01.06.15
 * Time: 23:08
 */
namespace App;

interface AuthenticateUserListener
{
    public function userHasLoggedIn($user);
}