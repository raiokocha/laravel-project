<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use App\Service\WalletService;
use Illuminate\Http\Request;

class WalletController extends Controller
{
    public function __construct(Wallet $wallet){
        parent::__construct($wallet);
        $this->services = new WalletService($wallet);
    }

    public function storeWallet(Request $request){
        try{
            return $this->successResponse($this->services->create($request));
        }catch(\Exception  $e){
            return $this->errorResponse($e->getMessage(),  $e->getCode());
        }
    }
}
