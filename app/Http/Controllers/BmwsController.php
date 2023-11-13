<?php


namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\bmws;

class BmwsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('bmw.all', [
            "title"    => "BMW", 
            "tb_bmw" => bmws::all()
          ]);
    }

    /**
     * Display the specified resource.
     */
    public function detailbmw($id)
    {
        return view('bmw.detail', [
            "title"    => "BMW", 
            "tb_bmw" => bmws::find($id)
          ]);
    }
}
