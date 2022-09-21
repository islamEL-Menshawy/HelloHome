<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\BaseController;
use Illuminate\Http\Request;
use App\Models\Newsletter;

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
}
