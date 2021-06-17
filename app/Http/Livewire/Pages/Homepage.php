<?php

namespace App\Http\Livewire\Pages;

use Livewire\Component;

class Homepage extends Component
{
    public function render()
    {
        return view('livewire.pages.homepage')->extends('layouts.main_app');
    }
}
