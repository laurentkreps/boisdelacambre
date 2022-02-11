<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class inscriptionsController extends Controller
{
     public function create()
    {
        
        $path = 'https://www.boisdelacambre.be/data/conges.txt';
        $json = json_encode(file_get_contents($path), true);

        return view('inscriptions', ['conges' => $json]);
    }

    public function sendEmail(Request $request)
    {
        Mail::to('michael@boisdelacambre.be')->send(new inscriptionEcole($request));
    }
}
