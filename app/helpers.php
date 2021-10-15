<?php


use App\Models\User;
use App\Models\Order;
use App\Models\Account;
use Illuminate\Support\Facades\Auth;

if (!function_exists('requeststatus')) {
    function requeststatus()
    {     
            $details = User::find(Auth::id());
           
            $status = $details->status;
            return $status;
       
    }
}
