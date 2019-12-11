<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->type == 'all') {
            $a = 1; 

            while ($a <= $request->number) {
                $room = new Room();
                $room->floor_id = $request->floor_id;
                $room->name = '0' . $a;
                $room->type = 'Single';
                $room->save();

                $a++;
            }

            return redirect()->route('floors.show', $request->floor_id)
                ->with('info', 'Room created succesfully');
        }else{
            $room = Room::create($request->all());

            return redirect()->route('floors.show', $request->floor_id)
                ->with('info', 'Room created succesfully');
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $room = Room::findOrFail($id);
        $floor = $room->floor;

        $room->delete();

        return redirect()->route('floors.show', $floor->id)
                ->with('info', 'Room deleted succesfully');
    }
}
