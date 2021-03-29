<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Illuminate\Http\Request;
use Livewire\Component;


class EditOneContact extends Component
{

    public $nome, $email, $telefone_fixo, $celular, $rede_social,$idEdit;


    public function render()
    {
        return view('livewire.edit-one-contact');
    }

    public function mount(Request $req){
        $result = Contact::where('id', $req->id)->get();
        $this->idEdit = $result[0]->id;
        $this->nome = $result[0]->nome;
        $this->email = $result[0]->email;
        $this->telefone_fixo = $result[0]->telefone_fixo;
        $this->celular = $result[0]->celular;
        $this->rede_social = $result[0]->rede_social;
    }

    public function update()
    {

        $this->validate([
            'nome' => 'required',
            'email' => 'required|email',
            'telefone_fixo' => 'max:20',
            'celular' => 'required',
            'rede_social' => 'max:120',
        ]);

        $contact = Contact::find($this->idEdit);
        $contact->update([
            'nome' => $this->nome,
            'email' => $this->email,
            'telefone_fixo' => $this->telefone_fixo,
            'celular' => $this->celular,
            'rede_social' => $this->rede_social,
        ]);

        session()->flash('message', 'Contato atualizado com sucesso!');
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function delete()
    {
        Contact::find($this->idEdit)->delete();
        return redirect()->to('/dashboard');
    }
}
