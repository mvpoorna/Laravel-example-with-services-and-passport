<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class sendController extends Controller
{
    public function submit(Request $req){

        $this->validate($req, [
            'name' => 'required',
            'email' => 'required'
        ]);

        \App\Service\sendMessageService::make($req);

        return back()->with(['sucess!' => 'Congratulations!']);
        // return "SUCCESS";
    }
}
