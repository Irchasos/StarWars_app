<?php

namespace App\Notifications;

use Illuminate\Notifications\Messages\SlackMessage;
use Illuminate\Notifications\Notification;

class SlackMessageNotification extends Notification
{
    protected $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function via($notifiable)
    {
        return ['slack'];
    }

    public function toSlack($notifiable)
    {
        return (new SlackMessage())
            ->content($this->message);
    }
}
