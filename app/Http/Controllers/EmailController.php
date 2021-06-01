<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendingEmail;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

// require '../vendor/autoload.php';

class EmailController extends Controller
{

    function index()
    {
        return view('emailsend');
    }

    function send(Request $request)
    {
        // $pile_sn = Auth::user()->pile_sn;
        $userId = Auth::user()->id;
        $name = Auth::user()->name;
        $desired_kw = $request->kw;

        $data = array(
            'name' => $name,
            'kw' => $desired_kw,
            'pile_sn' => $request->pile_sn
        );

        DB::update('update users set desired_kw = ?, has_pending_request_for_kw = ? where id = ?', [$desired_kw, '1', $userId]);

        Mail::to('aenderungen.wallboxtogo@mal-electronics.com')->send(new sendingEmail($data));
        return back()->with('success', 'Wir haben Ihre Anfrage erhalten!');
    }
}