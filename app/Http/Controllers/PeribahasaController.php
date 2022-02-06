<?php

namespace App\Http\Controllers;

use App\Models\Peribahasa;
use Illuminate\Http\Request;

class PeribahasaController extends Controller
{
    public function greet()
    {
        $time = now()->toDateTimeString();
        $hour = explode(' ', $time);
        if (strtotime($hour[1]) <= strtotime('11:00:00')) {
            $message = "Hi There 👋, Good Morning";
        } elseif (strtotime($hour[1]) == strtotime('12:00:00')) {
            $message = "Hi There 👋, Quick, it's Noon, Get Inside!!!";
        } elseif (strtotime($hour[1]) <= strtotime('17:00:00')) {
            $message = "Hi There 👋, Good Afternoon";
        } elseif (strtotime($hour[1]) <= strtotime('21:00:00')) {
            $message = "Hi There 👋, Good Evening";
        } elseif (strtotime($hour[1]) <= strtotime('04:00:00')) {
            $message = "Hi There 👋, Good Night";
        } else {
            $message = "Hi There 👋, Good Day";
        }

        return response()->json([
            'greeting' => $message,
            'message' => "Go visit link down below for documentation (It's not good, but it's there)",
            'documentation' => "https://github.com/WRamadhani/kupia"
        ]);
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
        return count($total);
        // $id = rand(1, $total);
        // $peribahasa = Peribahasa::where('id', $id);
        // return $peribahasa;
    }
}
