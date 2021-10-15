<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PaymentCards;


class PaymentController extends Controller
{
    public function add_card(Request $request)
    {
        $card=new PaymentCards();
        $card->username=$request->username;
        $card->cardnumber=$request->cardnumber;
        $card->cvc=$request->cvc;
        $card->expired_date=$request->expired_date;
        $card->user_id=$request->user_id;
        $card->save();
        if($card){
            return response()->json([
                'success' => 1,
                'message' => 'Card Has Been Added'
            ]);   
        }
    }
    public function view_card(Request $request)
    {
    $card=PaymentCards::where('user_id',$request->id)->get();
    if($card!=null){
        return response()->json([
            'success' => 1,
            'card' => $card,
            'message' => 'Card Has Been Added'
        ]);   
    }
    else{
        return response()->json([
            'success' => 0,
            'message' => 'No card Available'
        ]);  
    }
    }
    public function remove_card(Request $request){
        $card=PaymentCards::where('id',$request->id)->first();
        if($card==null){
            return response()->json([
                'success' => 0,
                'message' => 'No card Available'
            ]);  
        }
        else{
            $card=PaymentCards::where('id',$request->id)->delete();
            return response()->json([
                'success' => 1,
                'message' => 'Card Has been Deleted'
            ]);  
        }
    }
}
