<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactForm;
use Livewire\Attributes\Validate;

class Pageform extends Component
{
    #[Validate('required|string|min:3|max:100')]
    public $full_name;

    #[Validate('required|email|max:100')]
    public $email;

    #[Validate('nullable|string|min:7|max:100')]
    public $phone;

    #[Validate('required|string|min:10|max:500')]
    public $message;

    #[Validate('required|accepted')]
    public $checkbox = false;

    public $show = false;

    #[On('open-form')]
    public function showWebform()
    {
        $this->show = true;
    }

    #[On('close-form')]
    public function hidenWebform()
    {
        $this->show = false;
    }

    public function submitForm()
    {
        $this->validate();

        Mail::to('admin@example.com')->send(
            new ContactForm($this->full_name, $this->email, $this->phone, strip_tags($this->message))
        );

        $this->reset();
        $this->dispatch('form-submitted');
      /*   session()->flash('success', 'Thank you for you message! I will get back to you as soon as possible.');
        return redirect()->back(); */
    }


    public function render()
    {
        return view('livewire.pageform');
    }
}
