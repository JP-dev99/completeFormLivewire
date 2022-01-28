<?php

namespace App\Http\Livewire;


use App\Models\Visitors;
use Livewire\Component;

class Form extends Component
{
    public $name;
    public $city;
    public $marital_status = 'single';
    public $sex = 'male';
    public $age;
    public $attends_some_cell = 'no';
    public $leader_cell = 'Não possui';
    public $baptized = 'no';
    public $is_away = 'no';
    public $success;

    public function submitForm()
    {
        $this->validate([
            'name' => 'required',
            'city' => 'required',
            'marital_status' => 'required',
            'sex' => 'required',
            'age' => 'required',
            'attends_some_cell' => 'required',
            'baptized' => 'required',
            'age' => 'required',
            'is_away' => 'required',
        ]);

        Visitors::create([
            'name' => $this->name,
            'city' => $this->city,
            'marital_status' => $this->marital_status,
            'sex' => $this->sex,
            'age' => $this->age,
            'attends_some_cell' => $this->attends_some_cell,
            'leader_cell' => $this->leader_cell,
            'baptized' => $this->baptized,
            'is_away' => $this->is_away,
        ]);

        $this->reset(['name', 'city', 'marital_status', 'sex', 'age', 'attends_some_cell', 'leader_cell', 'baptized', 'is_away']);
        $this->success = 'O seu formulário foi enviado com sucesso!';
    }

    public function render()
    {
        return view('livewire.form')->extends('welcome');
    }
}
