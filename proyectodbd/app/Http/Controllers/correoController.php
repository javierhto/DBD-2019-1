<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\correo;

class correoController extends Controller
{
    public function index(){
        return view('emails.contentCorreo');
    }

    public function enviarEmail(Request $request){ 
        $this->validate($request, [
            'name'     =>  'required',
            'email'  =>  'required|email',
            'content' =>  'required'
        ]);

        //dd($request->message);

        Mail::to($request->email)->send(new correo($request->content, $request->name) );
        return back()->with('success', 'Mensaje enviado con exito');
    }

}
