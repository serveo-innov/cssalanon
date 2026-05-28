<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'nullable|string|max:30',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|min:10',
        ]);

        try {
            // Envoi à l'adresse de l'école
            Mail::send(
                'emails.contact',
                ['data' => $validated],
                function ($mail) use ($validated) {
                    $mail->to('contact@cssalanon.com', 'CS SALANON')
                         ->replyTo($validated['email'], $validated['name'])
                         ->subject('📬 Nouveau message : ' . ($validated['subject'] ?? 'Contact via le site'));
                }
            );

            // Accusé de réception à l'expéditeur
            Mail::send(
                'emails.contact-confirm',
                ['data' => $validated],
                function ($mail) use ($validated) {
                    $mail->to($validated['email'], $validated['name'])
                         ->subject('✅ Votre message a bien été reçu – CS SALANON');
                }
            );

            return redirect()->route('contact')
                ->with('success', 'Votre message a bien été envoyé ! Nous vous répondrons dans les plus brefs délais.');

        } catch (\Exception $e) {
            return redirect()->route('contact')
                ->withInput()
                ->with('error', 'Une erreur est survenue lors de l\'envoi. Veuillez réessayer ou nous appeler directement.');
        }
    }
}