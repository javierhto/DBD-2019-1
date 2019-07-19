<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class fileController extends Controller {
   public function alumnoArchivos() {
      return view('alumno.alumnoArchivos');
   }
   public function store(Request $request) {
        $path = $request->file('image')->store('uploads');
        return view('alumno.alumnoArchivos');
   }
}
?>