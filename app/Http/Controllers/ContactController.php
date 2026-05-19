<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name'    => 'required|min:2|max:100',
            'email'   => 'required|email',
            'message' => 'required|min:10',
        ], [
            'name.required'    => 'Le nom est obligatoire.',
            'name.min'         => 'Le nom doit contenir au moins 2 caractères.',
            'email.required'   => "L'email est obligatoire.",
            'email.email'      => "L'adresse email n'est pas valide.",
            'message.required' => 'Le message est obligatoire.',
            'message.min'      => 'Le message doit contenir au moins 10 caractères.',
        ]);

        // Option 1 : envoi par email (nécessite config mail dans .env)
        // Mail::to('contact@cssalanon.com')->send(new \App\Mail\ContactMail($request->all()));

        // Option 2 : simple redirection avec message de succès (sans config email)
        return redirect()->route('contact')->with('success', 'Votre message a bien été envoyé. Nous vous répondrons très prochainement !');
    }
}