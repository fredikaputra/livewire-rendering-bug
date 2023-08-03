<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use Livewire\Component;

class Form extends Component
{
    #[Rule('required')]
    public $password;
}
