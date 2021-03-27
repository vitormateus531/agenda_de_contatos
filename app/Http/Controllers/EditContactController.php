<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditContactController extends Controller
{
    //
    public function viewEditContact(){
        return view('edit-contact');
    }

    public function viewEditOneContact(){
        return view('edit-one-contact');
    }
}
