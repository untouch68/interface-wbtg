<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Charging extends Controller
{
    public function startCharging() {
        $data = [
            $pile_key = '',
            $pile_sn = '',
        ];
        return view('dashboard', $data);
    }
}
