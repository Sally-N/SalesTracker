<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Investment;

class DashboardController extends Controller
{
//     public function index() {
//  return view('admin.dashboard');
//     }

    public function dashboard(){
      $investments = Investment::all();
      // echo $investments;
    return view('admin.dashboard',compact('investments'));

    }


    public function initiate(){

        $initiate = Investment::create([
      "fkuser"=> 1,
        ]);

        return back()->with('success', "Investment Initiated");
        
    }

//update capital from zero to current amount

    public function addcapital(Request $request){

      $currentcapital = Investment::where('fkuser', 1)->get()->first();

      $capitalfield = $currentcapital -> capital;

      $additionalCapital = $request->input('capital');
    
    // dd($additionalCapital);

    $totalCurrentCapital = $capitalfield + $additionalCapital;
      
       Investment::where('fkuser', 1)->update([
          'capital'=> $totalCurrentCapital,
          ]);
return back()->with('success', "Capital updated sucessfully");
    }
}
