<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class messController extends Controller
{
    public function store()
    {
        request ()->validate([
            'fullname' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'contenido' => 'required',
        ],
        [
            'name.required'=>_('i need your name'),
        ] );
    }
}
