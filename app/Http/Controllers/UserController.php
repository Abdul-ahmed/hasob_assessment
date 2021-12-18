<?php

namespace App\Http\Controllers;

use App\Events\RegistrationEvent;
use App\Http\Requests\UserValidationRequest;
use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\RegisterationNotification;
use Illuminate\Support\Facades\Notification;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login','register', 'profile', 'logout']]);
    }

    public function register(UserValidationRequest $request)
    {
        $user = User::create([
            'first_name'=>$request->first_name,
            'middle_name'=>$request->middle_name,
            'last_name'=>$request->last_name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'pic_url'=>$request->pic_url,
            'password'=>bcrypt($request->password),
            'is_disabled'=>$request->is_disabled
        ]);
        event(new RegistrationEvent($request->email));
        return new UserResource($user);

    }

    public function login()
    {
        $credentials = request(['email', 'password']);

        $user = User::first();
        $registrationData = [
            'body' => 'Someone trying to login your credential somewhere, kindly confirm it\'s you!',
            'registrationText' => 'Not Me!',
            'url' => url('/'),
            'thankyou' => 'Thanks for your confirmation'
        ];

        if(!$token=auth()->attempt($credentials)) {
            return response()->json(['error'=>'Unauthorized'], 401);
        } else{
            // $user->notify(new RegisterationNotification($registrationData));
            Notification::send($user, new RegisterationNotification($registrationData));
            return $this->respondWithToken($token);
        }
    }

    public function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'user' => auth()->user()
        ]);
    }

    public function profile()
    {
        return response()->json(auth()->user());
    }

    public function logout()
    {
        auth()->logout();
        return response()->json(['message' => 'Logged out Successfully']);
    }
    
}
