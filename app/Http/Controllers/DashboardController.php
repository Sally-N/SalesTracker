<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InvestmentsModel;

class DashboardController extends Controller
{
    public function index() {
 return view('admin.dashboard');
    }

    public function dasnboard(){
      $investments = InvestmentsModel::all([

      ]);
    return view('admin.dashboard', compact("investmemts"));

    }


    public function initiate(){

        $initiate = InvestmentsModel::create([
      "fkuser"=> 1,
        ]);

        return back()->with('success', "Investment Initiated");
        
    }
}
