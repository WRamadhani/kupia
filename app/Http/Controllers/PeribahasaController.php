<?php

namespace App\Http\Controllers;

use App\Models\Peribahasa;
use Illuminate\Http\Request;

class PeribahasaController extends Controller
{
    public function index()
    {
        $data = Peribahasa::all();
        return $data->setHidden(['id', 'created_at', 'hidden_at']);
    }

    public function show($slug)
    {
        $peribahasa = Peribahasa::where('slug', $slug)->get();
        return $peribahasa->setHidden(['id', 'created_at', 'hidden_at']);
    }

    public function search(Request $request)
    {
        $query = $request['query'];
        $peribahasa = Peribahasa::where('peribahasa', 'LIKE', "%{$query}%")
            ->orWhere('arti', 'LIKE', "%{$query}%")->get();
        return $peribahasa->setHidden(['id', 'created_at', 'hidden_at']);
    }

    public function random()
    {
        $total = Peribahasa::all()->count();
        $id = rand(1, $total);
        $peribahasa = Peribahasa::where('id', $id);
        return $peribahasa->setHidden(['id', 'created_at', 'hidden_at']);
    }
}
