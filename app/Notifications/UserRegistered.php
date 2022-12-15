<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class UserRegistered extends Notification
{
    use Queueable;

    protected $password;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($password)
    {
        $this->password = $password;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Vielen dank für die Rückmeldung')
            ->greeting('Danke')
            ->line('Wir haben deine Rückmeldung erhalten.')
            ->line('Außerdem erhaltet ihr hier euer Passwort. Damit könnt ihr eure Entscheidung später noch ändern. Bitte hebt diese E-Mail also auf.')
            ->line($this->password)
            ->line('Sobald die Hochzeit vorbei ist habt ihr mit eurem Passwort außerdem die Möglichkeit auf der Webseite Bilder anzuschauen oder auch selbst hinzuzufügen.')
            ->salutation('Shannon & David');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
