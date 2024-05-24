<?php

namespace App\Services;

use App\Models\User;
use App\Models\Account\Account;

/**
 * Class AuthService.
 */
class AuthService
{
    /**
     * Summary of register
     * @param mixed $payload
     * @return User $user
     */
    public static function register($payload)
    {
        // Create account
        $account = new Account();
        $account->name = '***';
        $account->save();
        // Register user in the account
        $user = new User();
        $user->name  = $payload['name'];
        $user->email      = $payload['email'];
        $user->password   = $payload['password'];
        $user->account_id = $account->id;
        $user->save();
        // Assign them admin Role
        $user->assignRole('admin');

        return $user;
    }

    public function login()
    {
        //
    }

    public function logout()
    {
        //
    }
}
