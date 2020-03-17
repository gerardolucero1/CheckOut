<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\AssignedRoom;
use App\Room;

class AuthController extends Controller
{
    public function login(Request $request)
    {
    	$http = new \GuzzleHttp\Client;

    	try{
    		$response = $http->post(config('services.passport.login_endpoint'), [
    			'form_params' => [
    				'grant_type' => 'password',
    				'client_id' => config('services.passport.client_id'),
    				'client_secret' => config('services.passport.client_secret'),
    				'username' => $request->username,
    				'password' => $request->password,
    			]
    		]);
    		return $response->getBody();
    	}
    	catch(\GuzzleHttp\Exception\BadResponseException $e){
    		if($e->getCode() == 480){
    			return response()->json('Invalid request. Please enter a username or a password.', $e->getCode());
    		}else if($e->getCode() == 401){
    			return response()->json('Your credentials are incorrect. Please try again.', $e->getCode());
    		}

    	 	return response()->json('Something went wrong on the server.', $e->getCode());
    	}

    }

    public function register(Request $request)
    {
    	$request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    }

    public function logout()
    {
    	auth()->user()->tokens->each(function($token, $key){
    		$token->revoke();
    	});

    	return response()->json('Logged out successfully', 200);
    }

    //Obtener info del usuario
    public function user()
    {
        return auth()->user();
    }

    //Obtener las abitaciones asignadas al usuario
    public function getRooms(){
        $rooms = AssignedRoom::orderBy('id', 'DESC')->where('user_id', auth()->user()->id)->get();

        $arrayRooms = [];

        foreach ($rooms as $room) {
            $infoRoom = Room::orderBy('id', 'DESC')->where('id', $room->room_id)->first();
            array_push($arrayRooms, $infoRoom);
        }
        return $arrayRooms;
    }

    //Obtener info de la habitacion
    public function getRoom($id){
        $room = Room::orderBy('id', 'DESC')->where('id', $id)->first();
        return $room;
    }
}














