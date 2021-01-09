<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pesan;

class HomeController extends Controller
{
    //

    public function index()
    {
        $pesan = Pesan::all();
        $total = count($pesan);

        $belum = Pesan::where('status','belum')->get();
        $masuk = count($belum);
        
        return view('beranda', ['total' => $total, 'masuk' => $masuk]);
    }
}
