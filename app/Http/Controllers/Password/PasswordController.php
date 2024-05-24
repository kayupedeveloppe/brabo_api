<?php

namespace App\Http\Controllers\Password;

use App\Models\User;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Notifications\PasswordReseted;
use Illuminate\Support\Facades\Password;
use App\Http\Requests\ResetPasswordRequest;
use App\Http\Requests\ForgotPasswordRequest;

class PasswordController extends Controller
{
    use ApiResponser;

    /**
     * Create a new AuthController instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    /**
     * User request forgot password link.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function forgot(ForgotPasswordRequest $request)
    {

        $credentials = $request->only('email');
        Password::sendResetLink($credentials);
        return $this->successResponse(["message" => 'Reset password link sent on your email id.'], 201);
    }
    /**
     * User reset password.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function reset(ResetPasswordRequest $request)
    {
        $credentials = $request->only(['email', 'password', 'token']);

        $reset_password_status = Password::reset($credentials, function ($user, $password) {
            $user->password = $password;
            $user->save();
        });
        if ($reset_password_status == Password::INVALID_TOKEN) {
            return $this->errorResponse(["message" => "Invalid token provided"], 400);
        }
        if ($reset_password_status == Password::INVALID_USER) {
            return $this->errorResponse(["message" => "Invalid user provided"], 400);
        }
        return $this->successResponse(["message" => "Password has been successfully changed"], 201);
    }
}
