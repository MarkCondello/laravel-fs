<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

use Illuminate\Notifications\Messages\NexmoMessage;

class ProjectCreated extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */

    public $project;
    public $author;

    public function __construct($project, $author)
    {
       $this->project = $project;
       $this->author = $author;
     }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail', 'nexmo'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('Your new project was created.')
                    ->greeting("G'Day, {$this->author->name}")
                    ->line("You're new project {$this->project->title} was created.")
                    ->action('Project Link', url(route('projects.show', ['project' => $this->project->id]) ))
                    ->salutation('Thank you for your submission!');
    }


    /**
     * Get the Nexmo / SMS representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return NexmoMessage
     */

    public function toNexmo($notifiable)
    {
        return (new NexmoMessage())
            ->content("Your project was created...");
    }

    /**
     * Get the Nexmo / Shortcode representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [];
    }
}
