<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class finishUserRegister extends Mailable
{
    use Queueable, SerializesModels;

    protected string $title;
    protected string $name;
    protected string $email;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($name, $email)
    {
        $this->title = sprintf('サンプル　%sさん、登録ありがとうございます。', $name);
        $this->name  = $name;
        $this->email = $email;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->text('emails.email_finish_register_user')
                    ->subject($this->title)
                    ->with([
                        'name'  => $this->name,
                        'email' => $this->email
                      ]);
    }
}
