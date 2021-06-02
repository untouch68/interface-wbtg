<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendingEmailContact;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

// require '../vendor/autoload.php';

class EmailControllerContact extends Controller
{

    function index()
    {
        return view('emailsenddatasheet');
    }

    function send(Request $request)
    {
        $pile_sn = Auth::user()->pile_sn;
        $message = $request->message;
        $name = Auth::user()->name;
        $email = Auth::user()->email;

        $data = array(
            'name' => $name,
            'pile_sn' => $pile_sn,
            'message' => $message,
            'email' => $email,
        );

        Mail::to('aenderungen.wallboxtogo@mal-electronics.com')->send(new sendingEmailContact($data));
        return back()->with('success-contact', 'Erfolgreich gesendet!');
    }
}