<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class MtkController extends Controller
{
    public function tambahv3($a, $b){
        $p = new Product();
        $hasil = $a + $b;
        $data = [
            'bilangan_a' => $a,
            'bilangan_b' => $b,
            'bilangan_hasil' => $hasil
        ];
        //return $hasil;
        return view('tambahv3', $data);
    }
}
