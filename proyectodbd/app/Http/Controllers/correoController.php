<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class correoController extends Controller
{
    public function index(){
        return view('emails.contentCorreo');
    }

    public function enviarEmail(request $request){
        dd($request->all());
    //  Mail::to(Auth::user()->email)->send(new correo($request));
    }

}
