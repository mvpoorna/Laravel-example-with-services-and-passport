<?php

namespace App\Service;

use Illuminate\Http\Request;

class sendMessageService
{
    public static function make(Request $req){
        
        $message = \App\message::create([
            'name' => $req->input('name'),
            'email' => $req->input('email')
        ]);

        return $message;
    }
}
?>