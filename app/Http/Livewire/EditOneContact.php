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


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function delete($id)
    {
        $this->deleteId = $id;
        Contact::find($this->deleteId)->delete();
        return redirect()->to('/dashboard');
    }
}
