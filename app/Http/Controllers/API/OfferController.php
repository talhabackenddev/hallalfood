<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Offer_Allergens;
use App\Models\Offer_images;
use App\Models\Offer_tags;
use App\Models\Offer;

class OfferController extends Controller
{
    public function add_offer(Request $request){
        $offer=new Offer();
        $offer->offer_title=$request->offer_title;
        $offer->offer_description=$request->offer_description;
        $offer->offer_main_ingedient=$request->offer_main_ingedient;
        $offer->offer_cuisine=$request->offer_cuisine;
        $offer->offer_weight=$request->offer_weight;
        $offer->offer_type=$request->offer_type;
        $offer->offer_day=$request->offer_day;
        $offer->offer_time=$request->offer_time;
        $offer->offer_preorder=$request->offer_preorder;
        $offer->offer_quantity=$request->offer_quantity;
        $offer->offer_delivery_option=$request->offer_delivery_option;
        $offer->offer_streat=$request->offer_streat;
        $offer->offer_postcode=$request->offer_postcode;
        $offer->offer_city=$request->offer_city;
        $offer->offer_deliveryzone1_km=$request->offer_deliveryzone1_km;
        $offer->offer_deliveryzone1_price=$request->offer_deliveryzone1_price;
        $offer->offer_deliveryzone2_km=$request->offer_deliveryzone2_km;
        $offer->offer_deliveryzone2_price=$request->offer_deliveryzone2_price;
        $offer->offer_deliveryzone3_km=$request->offer_deliveryzone3_km;
        $offer->offer_deliveryzone3_price=$request->offer_deliveryzone3_price;
        $offer->offer_free_delivery=$request->offer_free_delivery;
        $offer->offer_price=$request->offer_price;
        $offer->save();
        if($request->has('image')){
            $images=$request->image;
            $i=0;
        foreach($images as $image){
        $imageName = time().'.'.$request->image[$i]->getClientOriginalExtension();  
        $request->image[$i]->move(public_path('offer_images'), $imageName);
        $image='/public/user_images/'.$imageName;
        $offerimage=new Offer_images();
        $offerimage->image=$imageName;
        $offerimage->offer_id=$offer->id;
        $offerimage->save();
        $i=$i+1;

            }
        }
        $tags=$request->tag;
        foreach($tags as $tag){
          
        $offertag=new Offer_tags();
        $offertag->tag=$tag;
        $offertag->offer_id=$offer->id;
        $offertag->save();
            }
            $Allergens=$request->allergen;
            $i=0;
            foreach($Allergens as $allergen){
            $offerAllergens=new Offer_Allergens();
            $offerAllergens->Allergens=$allergen;
            $offerAllergens->offer_id=$offer->id;
            $offerAllergens->save();
            
                }
                return response()->json([
                    'success' => 1,
                    'message' => 'Offer Has Been Added'
                ]); 

    }
}
