<?php

namespace App\Http\Controllers;

use App\Room;
use App\User;
use App\Floor;
use App\Revision;
use App\AssignedRoom;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ControlController extends Controller
{
    public function rooms_control(){
        return view('control.rooms_control');
    }

    public function get_floors(){
        $floors = Floor::with('rooms_floor')->orderBy('id', 'ASC')->where('hotel_id', Auth::user()->hotel->id)->get();
        return $floors;
    }

    public function rooms_update_status(Request $request, $id){
        $data = json_decode(file_get_contents('php://input'), true);
        $room = Room::findOrFail($id);
        $room->status = $data['status'];
        $room->save();

        return;
    }

    public function assign_rooms_control(){
        return view('control.assign_rooms_employees');
    }

    public function get_employees(){
        $employees = User::with('rooms')->orderBy('id', 'ASC')->where('hotel_id', Auth::user()->hotel->id)->get();

        return $employees;
    }

    public function assign_rooms_employees_control(Request $request){
        $employees = json_decode(file_get_contents('php://input'), true);
        $arrayRooms = [];

        foreach(Auth::user()->hotel->users as $employee){
            $assigned = AssignedRoom::where('user_id', $employee->id)->delete();
        }

        foreach(Auth::user()->hotel->floors as $floor){
            foreach($floor->rooms_floor as $room){
                array_push($arrayRooms, $room);
            }
        }

        if(count($arrayRooms) % count($employees) == 0){
            $number = count($arrayRooms) / count($employees);
            $contador = 0;
            $flag = 0;

            foreach($arrayRooms as $room){
                $newAssign = new AssignedRoom();
                $newAssign->room_id = $room->id;
                $newAssign->user_id = $employees[$flag];
                $newAssign->save();

                $contador++;

                if($contador == $number){
                    $contador = 0;
                    $flag++;
                }
            }  
        }else{
            $number = intval(count($arrayRooms) / count($employees));
            $total = $number * count($employees);
            $contador = 0;
            $otroContador = 0;
            $flag = 0;

            foreach($arrayRooms as $room){
                $newAssign = new AssignedRoom();
                $newAssign->room_id = $room->id;
                $newAssign->user_id = $employees[$flag];
                $newAssign->save();

                $contador++;
                $otroContador++;

                if($contador == $number && $otroContador < $total){
                    $contador = 0;
                    $flag++;
                }

                if($otroContador == $total){
                    $flag = 0;
                }

                if($otroContador > $total){
                    if(($flag + 1) >= count($employees)){
                        $flag = 0;
                    }else{
                        $flag++;
                    }
                }
            }
        }
        $count = count($arrayRooms) / count($employees);
        return;
    }

    public function show_rooms($id){
        $user = User::findOrFail($id);
        return view('control.rooms.index', compact('user'));
    }

    public function verification_room($id){
        $revision = Revision::where('room_id', $id)->first();
        return view('control.rooms.show', compact('revision'));
    }

    public function update_verification_room(Request $request, $id){
        $revision = Revision::findOrFail($id);
        $revision->score = $request->rate;
        $revision->reviewed = true;
        $revision->save();

        return redirect()->route('control.show.verification_room', $revision->room->id)
            ->with('info', 'Usuario created succesfully');
    }
}
