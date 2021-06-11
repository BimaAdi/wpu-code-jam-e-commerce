<?php

namespace App\Http\Controllers;

use App\Models\RakitLaptop;
use Illuminate\Http\Request;

class RakitLaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = RakitLaptop::with('items')->get();
        return response()->json($data, 200);
    }

}
