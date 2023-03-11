<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FormAsociativa extends Component
{
    public $currentPage = 1;
    public $success;

    // Form properties
    public $asociad_h_org;
    public $asociad_f_org;

    public $asociad_29_55;
    public $asociad_56;
    public $asociad_disc;
    public $asociad_rural;
    public $asociad_urban;
    public $asociadmen_1slm;

    public $email;
    public $password;
    public $confirmPassword;

    public $pages = [
        1 => [
            'heading' => 'Personal Information',
            'subheading' => 'Enter your name and email to get started.',
        ],
        2 => [
            'heading' => 'Password',
            'subheading' => 'Create a password for the new account.',
        ],
        3 => [
            'heading' => 'Step 3',
            'subheading' => 'This is step 3',
        ],
        4 => [
            'heading' => 'Step 4',
            'subheading' => 'This is step 4',
        ],
    ];

    private $validationRules = [
        1 => [
            'asociad_h_org' => ['required'],
            'asociad_f_org' => ['required'],

            'asociad_29_55' => ['required','min:1'],
            'asociad_56' => ['required','min:1'],
            'asociad_disc' => ['required','min:1'],
            'asociad_rural' => ['required','min:1'],
            'asociad_urban' => ['required','min:1'],
            'asociadmen_1slm' => ['required','min:1'],

        ],
        2 => [
            'asociad_rural' => ['required','min:1'],
            'asociad_urban' => ['required','min:1'],
            'asociadmen_1slm' => ['required','min:1'],
        ],
        3 => [
            'asociad_rural' => ['required','min:1'],
            'asociad_urban' => ['required','min:1'],
            'asociadmen_1slm' => ['required','min:1'],
            // Validation rules for step 3
        ],
        4 => [
            'asociad_rural' => ['required','min:1'],
            'asociad_urban' => ['required','min:1'],
            'asociadmen_1slm' => ['required','min:1'],
            // Validation rules for step 4
        ],
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->validationRules[$this->currentPage]);
    }

    public function goToNextPage()
    {
        $this->validate($this->validationRules[$this->currentPage]);
        $this->currentPage++;
    }

    public function goToPreviousPage()
    {
        $this->currentPage--;
    }

    public function resetSuccess()
    {
        $this->reset('success');
    }

    public function submit()
    {
        $rules = collect($this->validationRules)->collapse()->toArray();

        $this->validate($rules);

        // Your submit logic here

        $this->reset();
        $this->resetValidation();

        $this->success = 'User created successfully!';
    }

    public function render()
    {
        return view('livewire.formasociativa');
    }
}
