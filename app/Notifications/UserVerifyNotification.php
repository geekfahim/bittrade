<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Support\Facades\Auth;

class UserVerifyNotification extends VerifyEmail implements ShouldQueue
{
    use Queueable;
    public $user;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user = '')
    {
        $this->user =  $user ?: Auth::user(); 
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        if(empty($this->user)) {
            $this->user = User::where('id', $notifiable->getKey())->first();
        }
        $verifyUrl  = $this->verificationUrl($notifiable);
        return (new MailMessage)->subject('Verify your account')->view(
            'emails.welcome',
            [
                'user' => $this->user,
                'user_name' => $this->user->name,
                'user_ref_id' => $this->user->ref_id,
                'verifyUrl' => $verifyUrl,
            ]
        );
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
