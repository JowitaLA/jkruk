<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendMail(Request $request)
    {
        // Walidacja danych
        $request->validate([
            'emailAddress' => 'required|email',
            'question' => 'required|string',
        ]);

        // Pobranie danych
        $email = $request->input('emailAddress');
        $question = $request->input('question');

        // Wysyłka e-maila
        Mail::raw($question, function ($message) use ($email) {
            $message->to('jowitala01@gmail.com') // Podmień na swój adres
                    ->from('jowisz1@onet.pl', 'JKruk') // <--- Ustaw nadawcę
                    ->subject($email)
                    ->replyTo($email); // E-mail użytkownika w nagłówku
        });

        return response()->json(['message' => 'Email wysłany!']);
    }
}
