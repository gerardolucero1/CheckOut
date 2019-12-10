<?php

namespace App\Http\Controllers;

use App\Message;
use App\Ticket;
use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('messages.index');
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
        $message = new Message();
        $message->from_id = Auth::user()->id;
        $message->to_id = $request->to_id;
        $message->content = $request->content;
        $saved = $message->save();

        $data = [];
        $data['success'] = $saved;
        $data['message'] = $message;
        return $data;
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
        //
    }

    public function messages(Request $request){
        $userId = Auth::user()->id;
        $contactId = $request->contact_id;
        return Message::select(
            'id', 
            DB::raw("IF(`from_id` = $userId, 1, 0) as written_by_me"), 
            'created_at',
            'content',
            'tipo',
            'created_at',
            'id',
            )->where(function($query) use ($userId, $contactId){
                $query->where('from_id', $userId)->where('to_id', $contactId);
            })->orWhere(function($query) use ($userId, $contactId){
                $query ->where('from_id', $contactId)->where('to_id', $userId);
            })->get();
            
           
    }

    public function ticket(Request $request){
        $data = json_decode(file_get_contents('php://input'), true);
        $data['message_id'];
        $mensajeCopiar = Message::where('id', $data['message_id'])->first();
       
        
        $message = new Message();
        $message->from_id = $mensajeCopiar->from_id;
        $message->to_id = $mensajeCopiar->to_id;
        $message->content = $mensajeCopiar->content;
        $message->tipo = 1;
        $message->save();

        $ticket = new Ticket();
        $ticket->hotel_id = Auth::user()->hotel->id;
        $ticket->numRoom = $data['num_room'];
        $ticket->message = $mensajeCopiar->content;
        $ticket->type = 1;
        $ticket->attended = false;
        $ticket->save();


    }

    public function requirement(Request $request){
        $data = json_decode(file_get_contents('php://input'), true);
        $data['message_id'];
        $mensajeCopiar = Message::where('id', $data['message_id'])->first();
       
        
        $message = new Message();
        $message->from_id = $mensajeCopiar->from_id;
        $message->to_id = $mensajeCopiar->to_id;
        $message->content = $mensajeCopiar->content;
        $message->tipo = 2;
        $message->save();

        $ticket = new Ticket();
        $ticket->hotel_id = Auth::user()->hotel->id;
        $ticket->numRoom = $data['num_room'];
        $ticket->message = $mensajeCopiar->content;
        $ticket->type = 2;
        $ticket->attended = false;
        $ticket->save();

    }
}
