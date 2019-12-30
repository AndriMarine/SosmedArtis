<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Chat;

class ChatsController extends Controller
{
   public function index(){
        return Chat::all();
    }

    public function create(request $request){
        $Chat = new Chat;
        $Chat->receiver_id = $request->receiver_id;
        $Chat->sender_id = $request->sender_id;
        $Chat->reveice_time = $request->reveice_time;
        $Chat->send_time = $request->send_time;
        $Chat->description = $request->description;
        $Chat->status_message = $request->status_message;
        $Chat->save();
    }

    public function update(request $request,$id){
        $receiver_id = $request->receiver_id;
        $sender_id = $request->sender_id;
        $reveice_time = $request->reveice_time;
        $send_time = $request->send_time;
        $description = $request->description;
        $status_message = $request->status_message;

        $Chat = Chat::find($id);
       	$Chat->receiver_id = $receiver_id;
        $Chat->sender_id = $sender_id;
        $Chat->reveice_time = $reveice_time;
        $Chat->send_time = $send_time;
        $Chat->description = $description;
        $Chat->status_message = $status_message;
        $Chat->save();

        return "Data Berhasil Di Update";
    }

    public function delete($id){
        $Chat = Chat::find($id);
        $Chat->delete();

        return "Data Berhasil Di Hapus";
    }
}
