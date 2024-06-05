<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

use Illuminate\Notifications\Messages\SlackMessage;

class ProjectCreatedSlack extends Notification
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
       // dd($project, $author);
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['slack'];
    }


    /**
     * Get the Slack representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return SlackMessage
     */
    public function toSlack($notifiable)
    {
        $url = route('projects.show', ['project' => $this->project->id]);

        return (new SlackMessage)
            ->from('Project manager app')
            ->content('Your project was created...')
            ->attachment(function ($attachment) use ($url) {
                $attachment
                ->title("Project {$this->project->id}", $url)
                ->fields([
                    'Title' => $this->project->title,
                    'Desc'  => $this->project->description,
                    'Author' => $this->author->name,
                    'Email' => $this->author->email
                ]);
            });
    }
 
}
