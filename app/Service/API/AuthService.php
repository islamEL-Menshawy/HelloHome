<?php

namespace App\Service\API;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthService
{
    private $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function login($data): array
    {
        if(Auth::attempt(['email' => $data->email, 'password' => $data->password])){
            $authUser = Auth::user();

            $success['token'] =  $authUser->createToken('MyAuthApp')->plainTextToken;
            $success['name'] =  $authUser->name;
            $success['status'] = true;
            return $success;
        }
        else{
            $success['status'] = false;
            return $success;
        }

    }

    public function create_new_user($data): User
    {
        return $this->user->create([
            "name" => $data->name,
            "email" => $data->email,
            "password" => bcrypt($data->password)
        ]);
    }
}
