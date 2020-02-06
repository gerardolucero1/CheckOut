<?php

namespace App\Http\Controllers;

use App\Room;
use App\User;
use App\Floor;
use App\Revision;
use App\AssignedRoom;
use App\Ticket;
use App\Hotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ControlController extends Controller
{
    public function rooms_control(){
        return view('control.rooms_control');
    }

    public function schedules(){
        return view('control.schedules');
    }

    public function rooms_pending_review(){
        $data = Auth::user()->hotel->rooms->toArray();
        $rooms = array_filter($data, function($var){
            return $var['status'] == 'Pending Review';
        });

        return view('control.pending_review', compact('rooms'));
    }

    public function get_floors(){
        $floors = Floor::with('rooms_floor')->orderBy('id', 'ASC')->where('hotel_id', Auth::user()->hotel->id)->get();
        return $floors;
    }

    public function get_users(){
        $users = User::orderBy('id', 'ASC')->where('hotel_id', Auth::user()->hotel->id)->get();
        return $users;
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

    public function tickets_list(){
        $tickets = Ticket::orderBy('id', 'DESC')->where('type', 1)->where('attended', false)->get();
        return view('control.tickets_list', compact('tickets'));
    }

    public function verification_ticket_room($id){
        $ticket = Ticket::findOrFail($id);
        return view('control.verification_ticket_room', compact('ticket'));
    }

    public function autoSchedule($id){
        $hotel = Hotel::findOrFail($id);
        $employees = User::orderBy('id', 'DESC')->where('hotel_id', $id)->get();
        $floors = Floor::orderBy('id', 'DESC')->where('hotel_id', $id)->get();

        $arrayRooms = [];

        foreach ($floors as $floor) {
            $rooms = Room::orderBy('id', 'DESC')->where('floor_id', $floor->id)->get();
            array_push($arrayRooms, $rooms);
        }

        //dd(count($hotel->rooms));

        $fechaHoy = Carbon::now();
        // $fechaHoy = $fechaHoy->format('d-m-Y');

        $arrayShedule = [];   

        $year = $fechaHoy->format('Y');
        $month = $fechaHoy->format('m');
        $day = $fechaHoy->format('d');

        # Obtenemos el numero de la semana
        $semana = date("W", mktime(0, 0, 0, $month, $day, $year));

        # Obtenemos el día de la semana de la fecha dada
        $diaSemana = date("w", mktime(0, 0, 0, $month, $day, $year));

        # el 0 equivale al domingo...
        if($diaSemana == 0)
            $diaSemana = 7;

        # A la fecha recibida, le restamos el dia de la semana y obtendremos el lunes
        $primerDia = date("d-m-Y", mktime(0, 0, 0, $month, $day - $diaSemana + 1, $year));

        # A la fecha recibida, le sumamos el dia de la semana menos siete y obtendremos el domingo
        $ultimoDia = date("d-m-Y", mktime(0, 0, 0, $month, $day + (7 - $diaSemana), $year));

        foreach ($employees as $employee) {
            array_push($arrayShedule, array($employee, 0, 0));
        }

        for ($i=0; $i < 7; $i++) {
            //echo ($numeroRooms = rand(30, count($hotel->rooms))) . ' - ';
            echo ($numeroRooms = 23) . ' - ';
            $maxRooms = ($numeroRooms / count($employees));
            return round($maxRooms);
            
            
        }

        //dd($arrayShedule);
    }
}







































