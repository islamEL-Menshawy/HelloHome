<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\BaseController;
use App\Http\Requests\RegisterRequest;
use App\Service\API\AuthService;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Validator;

class AuthController extends BaseController
{
    private $authService;
    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function signin(Request $request)
    {
        $data = $this->authService->login($request);
        if ($data['status']){
            return $this->sendResponse($data, 'User signed in');
        }else{
            return $this->sendError('Unauthorised.', ['error'=>'Unauthorised']);
        }
    }

    public function signup(RegisterRequest $request): JsonResponse
    {
        $data = $this->authService->create_new_user($request);
        return $this->sendResponse($data, 'User created successfully.');
    }
}
