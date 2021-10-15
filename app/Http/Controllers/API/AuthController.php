<?php

namespace App\Http\Controllers\API;

use Carbon\Carbon;

use App\Models\User;
use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function signup(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            $response = [
                'message' => $validator->errors(),
            ];
            return response()->json($response, 200);
        }
        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
        if ($user) {
            return response()->json([
                'message' => 'Successfully created user!'
            ], 201);
        }
    }
    
    public function login(Request $request)
    {
        $user_check = User::where('email', $request->email)->first();
        if ($user_check == null) {
            return response()->json([
                'message' => 'User Not Found',
                'success' => 0
            ], 200);
        }
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            $response = [
                'error' => $validator->errors()
            ];
        }
        $credentials = request(['email', 'password']);
        if (!Auth::attempt($credentials))
            return response()->json([
                'message' => 'Unauthorized',
                'success' => 0
            ], 200);
        $user = $request->user();
        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;
        $token->expires_at = Carbon::now()->addDay();
        $token->save();
        return response()->json([
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'user' => $user,
            'success' => 1,
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString()
        ]);
    }
    public function logout(Request $request)
    {
        $token = $request->user()->token();
        $token->revoke();
        if ($token) {
            return response()->json([
                'success' => 1,
                'message' => 'Successfully logged out'
            ]);
        }
    }
	public function Become_chef(Request $req){
        $user=User::where('id',$req->id)->update([
            'postCode'=>$req->postCode,
            'cuisine'=>$req->postCode,
            'refCode'=>$req->postCode,
            'role'=>'chef'
        ]);
        return response()->json([
            'success' => 1,
            'message' => 'You are Update To chef '
        ]);
    }
	
	public function update_user(Request $request){
        if($request->has('image')){
            $imageName = time().'.'.$request->image->getClientOriginalExtension();  
        $request->image->move(public_path('user_images'), $imageName);
        $image='/public/user_images/'.$imageName;
        $user = User::where('id', $request->id)
         ->update([
             'first_name' => $request->first_name,
             'last_name' => $request->last_name,
             'phone' => $request->phone,
            'image' => $request->imageName,
             'email' => $request->email,
             'street' => $request->street,
             'postCode' => $request->postCode,
             'city' => $request->city,  
             'country' => $request->country    
         ]);
         return response()->json([
            'success' => 1,
            'message' => 'Profile Has Been Updated'
        ]);   
            }
            else{
             $user = User::where('id', $request->id)
         ->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'phone' => $request->phone,
            'email' => $request->email,
            'street' => $request->street,
            'postCode' => $request->postCode,
            'city' => $request->city,
            'country' => $request->country 
         ]);
         return response()->json([
            'success' => 1,
            'message' => 'Profile Has Been Updated'
        ]); 
            }
        
    }
	public function user_detail(Request $req){
		$user=User::where('id',$req->id)->get();
		 return response()->json([
            'success' => 1,
			 'user' => $user,
            'message' => 'Profile Has Been here'
        ]); 
	}
}
