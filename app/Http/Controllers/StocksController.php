<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StocksController extends Controller
{
    public function stocks(){
        return view('admin.stock.stocksview');
    }
}
