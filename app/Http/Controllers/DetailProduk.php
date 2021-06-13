<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class DetailProduk extends Controller
{
    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::findOrFail($id);
        return view('detail_produk', ['produk' => $produk]);
    }
}
