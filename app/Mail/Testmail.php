<?php

namespace App\Mail;
use Illuminate\Mail\Mailable;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class Testmail extends Mailable
{
    use Queueable, SerializesModels;

    public $mailings;

    public function __construct($mailings)
    {
        $this->mailings = $mailings;
    }

    public function build()
    {        
        return $this
                ->subject('Laravel test mail from Sharmila with an attachment')
                ->attach(public_path('images/' . $this->mailings['imagefile']),
                [
                    'as' => $this->mailings['name'] . '_profile.' . pathinfo($this->mailings['imagefile'], PATHINFO_EXTENSION),
                ])
                ->attach(public_path('imagess/'. $this->mailings['resume']),[
                    'as' => $this->mailings['name'].'_resume.' . pathinfo($this->mailings['resume'], PATHINFO_EXTENSION),
                ])
                ->view('forms.maildisp');
    }
}
