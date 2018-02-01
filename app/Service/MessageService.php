<?php

namespace App\Service;

use Illuminate\Http\Request;
use App\Message;

class MessageService
{
    public static function getMessages(){
        $message = Message::get();
        return $message;
    }

    public function create(Request $req){
    	$message = new Message();
    	$res = $message->create([
            'name' => $req->input('name'),
            'email' => $req->input('email')
        ]);
        return $res;
    }

    public function getMessage($id){
    	$message = Message::findOrFail($id);
        return $message;
    }

    public function update($id,$req){
        $message = Message::findOrFail($id);
        $res = $message->update([
            'name' => $req->input('name'),
            'email' => $req->input('email')
        ]);
        return $res;
    }

    public function remove($id){
        $message = Message::findOrFail($id);
        $res = $message->delete();
        return $res;
    }
}
?>