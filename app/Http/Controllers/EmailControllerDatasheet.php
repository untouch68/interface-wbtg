<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendingEmailDatasheet;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\DB;

// use PHPMailer\PHPMailer\PHPMailer;
// use PHPMailer\PHPMailer\SMTP;
// use PHPMailer\PHPMailer\Exception;

// require '../vendor/autoload.php';

class EmailControllerDatasheet extends Controller
{

    function index()
    {
        return view('emailsenddatasheet');
    }

    function send(Request $request)
    {
        $pile_sn = Auth::user()->pile_sn;
        $userId = Auth::user()->id;
        $name = Auth::user()->name;

        $data = array(
            'name' => $name,
            'pile_sn' => $pile_sn,
        );

        DB::update('update users set has_pending_request_for_data_sheet = ? where id = ?', ['1', $userId]);

        Mail::to('aenderungen.wallboxtogo@mal-electronics.com')->send(new sendingEmailDatasheet($data));
        return back()->with('success-datasheet', 'Anmeldung erfolgreich!');
    }
}