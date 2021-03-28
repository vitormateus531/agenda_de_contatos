<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use Illuminate\Http\Request;
use Livewire\Component;


class EditOneContact extends Component
{
    public function render(Request $req)
    {
        $result = Contact::where('id',$req->id)->get();
        return view('livewire.edit-one-contact',['EditContact' => $result]);
    }

    public function update(){
        
    }


}
