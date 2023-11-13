<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\porsches;


class PorschesController extends Controller
{
     /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('porsche.all', [
            "title"    => "tb_porsche", 
            "tb_porsche" => porsches::all()
          ]);
    }

    public function detailporsche($id)
    {
        return view('porsche.detail', [
            "title"    => "Porche", 
            "tb_porsche" => porsches::find($id)
          ]);
    }
}
