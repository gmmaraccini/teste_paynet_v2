<?php

namespace App\Listeners;

use App\Events\PasswordResetRequested;
use App\Services\PasswordResetService;
use Illuminate\Contracts\Queue\ShouldQueue;

class SendPasswordResetEmail implements ShouldQueue
{
    protected $passwordResetService;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(PasswordResetService $passwordResetService)
    {
        $this->passwordResetService = $passwordResetService;
    }

    /**
     * Handle the event.
     *
     * @param  PasswordResetRequested  $event
     * @return void
     */
    public function handle(PasswordResetRequested $event)
    {
        $this->passwordResetService->sendPasswordResetEmail($event->email, $event->token);
    }
}
