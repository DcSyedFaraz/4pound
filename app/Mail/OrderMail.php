<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class OrderMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;
    protected $attachmentsPath;
    protected $subjectname;
    protected $papername;
    protected $stylename;
    protected $flag;
    protected $user;
    protected $invoice;
    protected $password;
    protected $pt;
    protected $rs;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data,$pt,$rs)
    {
        $this->data = $data['order'];
        $this->subjectname=$data['subjectName'];
        $this->papername=$data['paperTypeName'];
        $this->stylename=$data['styleName'];
        $this->attachmentsPath = $data['files'];
        $this->flag= $data['flag'];
        $this->user= $data['user'];
        $this->invoice= $data['invoice'];
        $this->password = $data['password'];
        $this->pt = $pt;
        $this->rs = $rs;

    }



    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $email = $this->markdown('email.order')->subject('Order Confirmation')->with(["data" => $this->data,"subjectname"=>$this->subjectname,"papername"=>$this->papername,"stylename"=>$this->stylename,'flag' => $this->flag,'invoice' => $this->invoice,'user' => $this->user,'password' => $this->password,'pt' => $this->pt,'rs' => $this->rs]);

        foreach ($this->attachmentsPath as $filePath) {
            $email->attachFromStorage('/public/'. $filePath);
        }

        return $email;


    }
}
