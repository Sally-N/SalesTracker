<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InvestmentsModel;

class DashboardController extends Controller
{
//     public function index() {
//  return view('admin.dashboard');
//     }

    public function dashboard(){
      $investments = InvestmentsModel::all();
      // echo $investments;
    return view('admin.dashboard',compact('investments'));

    }


    public function initiate(){

        $initiate = InvestmentsModel::create([
      "fkuser"=> 1,
        ]);

        return back()->with('success', "Investment Initiated");
        
    }

//update capital from zero to current amount

    public function addcapital(Request $request){
      
          $updatecapital = InvestmentsModel::where('fkuser', 1)->update([
          'capital'=>$request->input('capital'),
          ]);

return back()->with('success', "Capital updated sucessfully");
    }
}
