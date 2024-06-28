<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'mail' => 'required',
            'comment' => 'required'
        ]);

        Contact::create([
            'name'=>$request->input('name'),
            'lastname'=>$request->input('lastname'),
            'mail'=>$request->input('mail'),
            'comment'=>$request->input('comment')
        ]);

        return redirect()->back()->with('success', 'Tu mensaje fue enviado con exito! Gracias!');
    }
}
