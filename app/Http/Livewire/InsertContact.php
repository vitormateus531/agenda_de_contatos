<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use App\Models\Contact;
use Livewire\Component;

class InsertContact extends Component
{
    public $nome,$email,$telefone_fixo,$celular,$rede_social,$id_user;

    public function __construct()
    {
        $this->id_user = Auth::user()->id;
    }

    public function render()
    {
        return view('livewire.insert-contact');
    }

    public function resetInputs()
    {
        $this->nome = '';
        $this->email = '';
        $this->telefone_fixo = '';
        $this->celular = '';
        $this->rede_social = '';
    }

    public function store()
    {
        $validate = $this->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'telefone_fixo' => 'max:20',
            'celular' => 'required',
            'rede_social' => 'max:120',
            'id_user' => 'required'
        ]);

        Contact::create($validate);
        $this->resetInputs();
        
        session()->flash('message', 'Contato criado com sucesso!');
    }
}
