<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class CreatePost extends Notification
{
    use Queueable;

    private $post_id;
    private $user_name;
    public function __construct($post_id, $user_name)
    {
        $this->post_id = $post_id;
        $this->user_name = $user_name;
    }

    public function via($notifiable)
    {
        return ['database'];
    }


    public function toArray($notifiable)
    {
        return [
           'post_id'=>$this->post_id,
           'user_name'=>$this->user_name,
        ];
    }
}
