<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use App\Evenement;
use App\User;
use Illuminate\Queue\SerializesModels;

class EpisenMail extends Mailable
{
    use Queueable, SerializesModels; 

    public $even;
    public $user;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Evenement $evenement,User $user )
    {
        $this->even=$evenement;
        $this->user=$user;
        
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        // dd($this->user);
        return $this->from($this->user->email)
        ->subject('Demande reservation salle etudiant : '.$this->user->name)
        ->view('emails.mailscolarite');
    }
}
