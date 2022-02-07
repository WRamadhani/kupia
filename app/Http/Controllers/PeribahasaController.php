<?php

namespace App\Http\Controllers;

use App\Models\Peribahasa;
use Illuminate\Http\Request;

class PeribahasaController extends Controller
{
    public function greet()
    {
        $data = Peribahasa::all();
        $total = count($data);
        return response()->json([
            'greeting' => $message,
            'message' => "Hi There 👋, Go visit link down below for documentation 👇 (It's not good, but it's there)",
            'documentation' => "https://github.com/WRamadhani/kupia",
            'total peribahasa' => "now we have in total {$total} peribahasa"
        ], 200);
    }

    public function index()
    {
        $data = Peribahasa::all();
        return $data;
    }

    public function show($slug)
    {
        $peribahasa = Peribahasa::where('slug', $slug)->get();
        return $peribahasa;
    }

    public function search(Request $request)
    {
        $query = $request['query'];
        $peribahasa = Peribahasa::where('peribahasa', 'LIKE', "%{$query}%")
            ->orWhere('arti', 'LIKE', "%{$query}%")->get();
        return $peribahasa;
    }

    public function random()
    {
        $total = Peribahasa::all();
        $id = rand(1, count($total));
        $peribahasa = Peribahasa::where('id', $id)->get();
        return $peribahasa;
    }
}
