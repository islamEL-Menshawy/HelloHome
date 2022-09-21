<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Models\Newsletter;
use App\Models\UnitIntrest;

class NotificationController extends BaseController
{
    public function newsletter(Request $request){
        $request->validate([
           'email' => 'required|string|email'
        ]);
        $subscribe = new Newsletter();
        $subscribe->email = $request->email;

        if ($subscribe->save()){
            return $this->sendResponse([], 'Thanks for subscribing');
        }
    }

    public function unitInterest(Request $request){
        $request->validate([
            'fullName' => 'required',
            'email' => 'email',
            'phone_code' => 'required',
            'phone_number' => 'required',
            'unit_url' => 'required',
            'massage' => 'string',
        ]);

        $record = new UnitIntrest();
        $record->fullName = $request->fullName;
        $record->email = $request->email;
        $record->phone_code = $request->phone_code;
        $record->phone_number = $request->phone_number;
        $record->massage = $request->massage;
        $record->unit_url = $request->unit_url;
        if ($record->save()){
            return $this->sendResponse([], 'Thanks for your interesting');
        }
    }
}
