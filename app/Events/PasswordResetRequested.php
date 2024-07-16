<?php
namespace App\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;

class PasswordResetRequested
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $email;
    public $token;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($email, $token)
    {
        $this->email = $email;
        $this->token = $token;
    }
}
