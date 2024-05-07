<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    public function allproduct() {
        $data_produk = DB::select("select * from products");
        var_dump($data_produk[0]);
    }

    public function semuaproduk() {
        $data = Product::all();
        //var_dump($data[0]->ProductName);
       return view('ui_semuaproduk',['data' => $data]);
    }

    public function produkdetil($id) {
        $data = Product::find($id);
        //var_dump($data);
        return view('ui_detil',['data' => $data]);
    }

    public function tambahproduk(){
        $p = new Product;
        $p->ProductName = "Nasi Padang Level 5";
        $p->UnitPrice = 10;
        $p->save();
        var_dump($p);
    }
}
