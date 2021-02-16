<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Service\UserService;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(User $user){
        parent::__construct($user);
        $this->services = new UserService($user);
    }

    public function createUser(Request $request){
        try{
            return $this->successResponse( $this->services->create($request));
        }catch(\Exception  $e){
            return $this->errorResponse($e->getMessage(),  $e->getCode());
        }
    }
}
