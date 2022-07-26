<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use Illuminate\Http\Request;

class MenController extends Controller
{
     public function index()
     {

        return view('welcome');
     }
    public function view (){
    $deliveris = Delivery::all();

        return view('delivery.deliverylist')->with('deliveris',$deliveris);
    }
    public function deliverydelete (Request $request){
        $deliveris = Delivery::where('id', $request->id)->first();
        $deliveris->delete();
    
            return redirect('allDeliveryBoys')->with('deliveris',$deliveris);
        }
        public function index1()
        {
   
           return Delivery::all();
        }

}
