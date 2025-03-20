<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListBarangController extends Controller
{
    public function getData() {
        $dataBarang = [
            ['id' => 1, 'name' => 'Laptop', 'harga'=> 15000],
            ['id' => 2, 'name' => 'Mouse', 'harga'=> 100000],
            ['id' => 3, 'name' => 'Keyboard', 'harga'=> 200000],
            ['id' => 4, 'name' => 'Monitor', 'harga'=> 500000],
            ['id' => 5, 'name' => 'Printer', 'harga'=> 1000000]
        ];

        return $dataBarang;
    }

    public function tampilkan() {
        $data = $this->getData();
        return view('list_barang', compact('data'));
    }
}