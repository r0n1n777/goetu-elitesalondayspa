<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Message;

class Messages extends Component
{
    public $message_id;
    public $subject;
    public $name;
    public $email;
    public $phone;
    public $message_content;

    public $messages;

    public function render()
    {        
        $this->messages = Message::orderBy('created_at', 'desc')->get();

        return view('admin/messages')
            ->layout('admin/layout');
    }

    public function fresh()
    {
        $this->resetExcept('message_id');
    }

    public function set($id)
    {
        $this->fresh();

        $message = Message::find($id);
        $this->message_id = $id;
        $this->subject = $message->subject;
        $this->name = $message->name;
        $this->email = $message->email;
        $this->phone = $message->phone;
        $this->message_content = $message->message;
    }

    public function delete()
    {
        Message::find($this->message_id)->delete();

        session()->flash('success', 'Message deleted.');
        $this->fresh();
    }
}
