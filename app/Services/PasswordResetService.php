<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;
use App\Mail\PasswordResetMail;

class PasswordResetService
{
    public function sendPasswordResetEmail($email, $token)
    {
        $resetLink = url(route('password.reset', ['token' => $token, 'email' => $email], false));

        Mail::to($email)->send(new PasswordResetMail($resetLink));
    }
}
