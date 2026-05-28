<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255',
        ]);

        $email = $request->input('email');

        try {
            // Email de notification à l'école
            Mail::send(
                'emails.newsletter-admin',
                ['email' => $email],
                function ($mail) {
                    $mail->to('contact@cssalanon.com', 'CS SALANON')
                         ->subject('📧 Nouvelle inscription newsletter – CS SALANON');
                }
            );

            // Email de confirmation à l'abonné
            Mail::send(
                'emails.newsletter-confirm',
                ['email' => $email],
                function ($mail) use ($email) {
                    $mail->to($email)
                         ->subject('✅ Inscription confirmée – Newsletter CS SALANON');
                }
            );

            return redirect()->back()
                ->with('newsletter_success', 'Merci ! Vous êtes bien inscrit à notre newsletter.');

        } catch (\Exception $e) {
            return redirect()->back()
                ->with('newsletter_error', 'Une erreur est survenue. Veuillez réessayer.');
        }
    }
}