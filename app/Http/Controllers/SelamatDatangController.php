<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SelamatDatangController extends Controller
{
    public function sapa()
    {
        return "Pesan dari controller: halo ini saya controller";
    }

    public function welcome()
    {
        return view('student.add-siswa');
    }
}
