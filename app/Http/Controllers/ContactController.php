<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function send(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required',
        'firstname' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);

    $to = 'tlafont49@gmail.com'; // Remplacez par votre adresse e-mail
    $subject = 'Message de contact de ' . $validatedData['name'] . ' ' . $validatedData['firstname'];

    try {
        Mail::raw($validatedData['message'], function ($mail) use ($to, $subject, $validatedData) {
            $mail->to($to)
                ->subject($subject)
                ->from(config('mail.from.address'), config('mail.from.name'))
                ->replyTo($validatedData['email'], $validatedData['name'] . ' ' . $validatedData['firstname']);
        });

        return response()->json(['status' => 'success']);
    } catch (\Exception $e) {
        return response()->json(['status' => 'error']);
    }
}

}