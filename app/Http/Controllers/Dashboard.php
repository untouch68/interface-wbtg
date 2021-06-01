<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;

class Dashboard extends Controller
{
    public function getBoxStatus() {
        // Pile Key from Admin
        $user = DB::table('users')
        ->where('id', 1)
        ->first();
        $pile_key = $user->pile_key;

        // Pile SN
        $pile_sn = Auth::user()->pile_sn;

        $body = [
            "pile_sn" => $pile_sn,
            "key" => $pile_key
        ];

        $response = Http::withBody(json_encode($body),'application/x-www-form-urlencoded')
        ->asForm()
        ->post("https://www.wydq.tech/weiyudevmanerge/interfa.php/foreign/Realdata?pile_sn=$pile_sn&key=$pile_key", [
            'pile_sn' => $pile_sn,
            'key' => $pile_key,
        ]);
        $json = json_decode($response);
        if($json->code == '1') {
            $status = $json->data->sta;
        } else {
            $status = '';
        }
        
        $statusArray = array(
            '0' => 'Ruhend',
            '1' => 'Lädt',
            '2' => 'Fehler',
            '3' => 'Startet',
            '4' => 'Normal Beendet',
            '5' => 'Fehlerhaft Beendet',
            '6' => 'Fehler beim Start',
            '7' => 'Verbindung',
            '8' => 'V link',
            '10' => 'Upgrade',
            '20' => 'Standby Betrieb',
            '40' => 'Ausgeschaltet',
            '1000' => 'Unbekannt',
        );

        foreach($statusArray as $key => $statusValue) {
            if($status == $key) {
                $status = $statusValue;
            }
        }

        $data = [
            'pile_key' => $pile_key, 
            'pile_sn' => $pile_sn, 
            'status' => $status,
            'response' => $response
        ];
        
        return $data;
    }

    public function startChargingCar() {
        // Pile Key from Admin
        $user = DB::table('users')
        ->where('id', 1)
        ->first();
        $pile_key = $user->pile_key;

        // Pile SN
        $pile_sn = Auth::user()->pile_sn;

        $body = [
            "pile_sn" => $pile_sn,
            "key" => $pile_key
        ];

        $response = Http::withBody(json_encode($body),'application/x-www-form-urlencoded')
        ->asForm()
        ->post("https://www.wydq.tech/weiyudevmanerge/interfa.php/foreign/start_charge", [
            'pile_sn' => $pile_sn,
            'key' => $pile_key,
        ]);

        $json = json_decode($response);
        if($json->code == '1') {
            $status = $json->msg;
        } else {
            $status = '';
        }

        // return $response;
    }

    public function stopChargingCar() {
        // Pile Key from Admin
        $user = DB::table('users')
        ->where('id', 1)
        ->first();
        $pile_key = $user->pile_key;

        // Pile SN
        $pile_sn = Auth::user()->pile_sn;

        $body = [
            "pile_sn" => $pile_sn,
            "key" => $pile_key
        ];

        $response = Http::withBody(json_encode($body),'application/x-www-form-urlencoded')
        ->asForm()
        ->post("https://www.wydq.tech/weiyudevmanerge/interfa.php/foreign/stop_charge", [
                'pile_sn' => $pile_sn,
                'key' => $pile_key,
        ]);

        $json = json_decode($response);
        if($json->code == '1') {
            $status = $json->msg;
        } else {
            $status = '';
        }

        // return $response;
    }

    public function index() {
        return view('dashboard', $this->getBoxStatus());
    }

    public function startcharging() {
       $this->startChargingCar();
       return view('dashboard', $this->getBoxStatus());

        
    }

    public function stopcharging() {
       $this->stopChargingCar();
       return view('dashboard', $this->getBoxStatus());
        
    }

    public function changekw(Request $request) {
        $pile_sn = Auth::user()->pile_sn; 
        $inputKw = $request->input_kw;
        
        

        return view('dashboard', $this->getBoxStatus());
    }
}
