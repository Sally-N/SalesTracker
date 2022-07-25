<?php

namespace App\Http\Controllers;

use App\Models\Stocks;
use Illuminate\Http\Request;
use App\Models\Investment;
// use Illuminate\Support\Facades\DB;

class StocksController extends Controller
{
    public function stocks(){
        $stocks=Stocks::all();

        return view('admin.stock.stocksview', compact('stocks'));
    }

    public function addstock(Request $request){
        $stockquantity = $request->input('quantity');
        $stockprice = $request->input('stockprice');
        $sellingprice = $request->input('sellingprice');

// stock amount

$stockamount = $stockquantity * $stockprice;
$profits = $sellingprice - $stockprice; //per item for 1 piece
$totalprofitsperitem = $profits * $stockquantity; //per several quantitis of one 1 item


$createStock = Stocks::create([
"itemstocked"=>$request->input('stockitem'),
"stockquantity"=>$stockquantity,
"stockamount"=>$stockamount,
"stockprice"=>$stockprice,
"sellingprice"=>$sellingprice,
"profits"=>$totalprofitsperitem,
"fkuser"=>1
]);

// get current capital

if ($createStock !== null) {
    $currentCapitalx = Investment::where('fkuser', 1)->get()->first(); ///is  an array
    // $currentCapitalx = DB::select()

//   dd ($currentCapitalx);
    $currentCapital = $currentCapitalx->capital;

    // dd($currentCapital);

    //current working capital
    $currentWorkingCapital = $currentCapitalx->workingcapital;

$newcapital = $currentCapital - $stockamount;

//    dd($newcapital);

 Investment::where('fkuser', 1)->update([
   'capital' => $newcapital,
   'workingcapital' =>$currentWorkingCapital + $stockamount,
]);

            return back()->with('success', "Stock added successfully");
        }
}

}
