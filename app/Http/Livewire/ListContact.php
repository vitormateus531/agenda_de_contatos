<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;

class ListContact extends Component
{

    public $search = '';

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

        return view('livewire.list-contact', ['listContact' => $result]);
    }
}
