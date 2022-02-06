<?php

namespace App\Http\Controllers;

use App\Models\Peribahasa;
use Illuminate\Http\Request;

class PeribahasaController extends Controller
{
    public function index()
    {
        // $time = now()->toDateTimeString();
        // $hour = explode(' ', $time);
        // if (strtotime($hour[1]) < strtotime('11:00:00')) {
        //     $message = "Good Morning";
        // } elseif (strtotime($hour[1]) < strtotime('11:00:00')) {
        //     # code...
        // } else {
        //     $message = "good day";
        // }
        $data = Peribahasa::all();
        // return date('h:i:sa');
        return $data;
    }

    public function show($slug)
    {
        $peribahasa = Peribahasa::where('slug', '=', $slug)->get();
        // return "as";
        return $peribahasa;
    }
}
