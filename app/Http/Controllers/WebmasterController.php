<?php

namespace App\Http\Controllers;

use App\User;
use App\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Routing\Redirector;

class WebmasterController extends Controller
{
    public function loginSelection(){
        $hotels = Hotel::all();
        return view('webmaster.loginSelection', compact('hotels'));
    }

    public function loginSelectionUpdate(Request $request){
        $user = User::where('id', Auth::user()->id)->first();
        $user->hotel_id = $request->hotel;
        $user->save();
        
        return redirect()->route('home.index');
    }
}
