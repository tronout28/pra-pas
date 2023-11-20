<?php

namespace App\Http\Controllers;

use App\Models\toyotas;
use Illuminate\Http\Request;

class ToyotasController extends Controller
{

    public function index()
    {
        return view('toyota.all', [
            "title"    => "tb_toyota", 
            "tb_toyota" => toyotas::all()
          ]);
    }

    public function detailtoyota($id)
    {
        return view('toyota.detail', [
            "title"    => "Toyota", 
            "tb_toyota" => toyotas::find($id)
          ]);
    }
}
