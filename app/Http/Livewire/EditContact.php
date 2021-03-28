<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use App\Models\Contact;

class EditContact extends Component
{
    public $search = '';
    public $deleteId = '';

    use WithPagination;

    public function render()
    {

        if ($this->search != '') {
            $result = Contact::where([
                ['nome', '=', $this->search],
                ['id_user', '=', Auth::user()->id]
            ])->orderBy('nome')->paginate(10);
        } else {
            $result = Contact::where('id_user', Auth::user()->id)->orderBy('nome')->paginate(10);
        }

        return view('livewire.edit-contact', [
            'listContact' => $result,
        ]);
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
    }
}
