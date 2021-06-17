<?php

namespace App\Http\Livewire\Pages;

use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Contact extends Component
{
    public $first_name = "";
    public $last_name = "";
    public $email = "";
    public $subject = "";
    public $msg  = "";

    protected $rules = [
        'first_name'    => 'required',
        'last_name'     => 'required',
        'email'         => 'required|email',
        'msg'           => 'required',
        'subject'       => 'required'
    ];

    public function render()
    {
        return view('livewire.pages.contact')->extends('layouts.main_app');
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function sendMail()
    {
        $this->validate();

        Mail::send([], [], function ($message) {
            $message->from($this->email, ucfirst($this->last_name) . ', ' . ucfirst($this->first_name))
            ->subject($this->subject)
            ->to(config('mail.from.address'))
            ->setBody($this->msg, 'text/html');
        });
        

        $this->dispatchBrowserEvent('swal:prompt', [
            'title' => 'Success!',
            'message' => 'Email sent!',
            'type' => 'success'
        ]);

        $this->clearVars();
    }

    public function clearVars()
    {
        $this->first_name = "";
        $this->last_name = "";
        $this->email = "";
        $this->subject = "";
        $this->msg  = "";
    }

}
