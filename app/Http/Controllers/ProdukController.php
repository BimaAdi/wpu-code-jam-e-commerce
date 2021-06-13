<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $brand = $request->query('brand', null);
        $processor = $request->query('processor', null);
        $ram_size = $request->query('ram_size', null);
        $type = $request->query('type', null);
        $gpu = $request->query('gpu', null);
        $search = $request->query('search', null);
        $page = $request->query('page', 1);
        $size = $request->query('size', 5);

        $produks = Produk::select('*');
        if ($brand != null) {
            $produks = $produks->where('brand', $brand);
        }

        if ($processor != null) {
            $produks = $produks->where('processor', $processor);
        }

        if ($ram_size != null) {
            $produks = $produks->where('ram size', $ram_size);
        }

        if ($type != null) {
            $produks = $produks->where('type', $type);
        }

        if ($gpu != null) {
            $produks = $produks->where('gpu', $gpu);
        }

        if ($search != null && $search != '') {
            $produks = $produks
                ->where(function ($query) use ($search) {
                    $query->where('name', 'LIKE', '%'.$search.'%')
                    ->orWhere('brand', 'LIKE', '%'.$search.'%');
                });
        }

        $produks = $produks->limit($size)->offset($size * ($page - 1));
        return response()->json($produks->get(), 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show(Produk $produk)
    {
        return response()->json($produk, 200);
    }
}
