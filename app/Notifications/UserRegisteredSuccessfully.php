<?php

namespace App\Notifications;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class UserRegisteredSuccessfully extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
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

        /** @var User $user */
        $user = $this->user;


         return (new MailMessage)
                    ->from(env('MAIL_USERNAME'))
                    ->subject('Berhasil membuat akun baru')
                    ->greeting(sprintf('Hello %s', $user->name))
                    ->line('Anda telah berhasil mendaftar akun anda. Silahkan aktifkan akun anda.')
                    ->action('Click Here', route('activate.user', $user->activation_code))
                    ->line('Terima kasih telah mendaftar! ðŸŽ‰');
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
