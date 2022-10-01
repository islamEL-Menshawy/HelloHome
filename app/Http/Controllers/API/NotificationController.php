<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\BaseController;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Newsletter;
use App\Models\UnitIntrest;
use App\Models\ContactUs;

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

    public function contact_us(Request $request){
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'email',
            'phone_code' => 'required',
            'phone_number' => 'required',
            'massage' => 'string'
        ]);

        $record = new ContactUs();
        $record->firstName = $request->firstName;
        $record->lastName = $request->lastName;
        $record->email = $request->email;
        $record->phone_code = $request->phone_code;
        $record->phone_number = $request->phone_number;
        $record->massage = $request->massage;
        if ($record->save()){
            return $this->sendResponse([], 'Thanks for contacting us');
        }
    }

    public function delete_notification(int $id ,string $type): JsonResponse
    {
        if ($type == 'unit'){
            $notification = UnitIntrest::find($id);
        }else{
            $notification = ContactUs::find($id);
        }
        $notification->delete();
        return $this->sendResponse([], 'Notification deleted successfully');
    }


}
