<?php


namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Service\TransactionService;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function __construct(Transaction $transaction)
    {
        parent::__construct($transaction);
        $this->services = new TransactionService($transaction);
    }

    public function storeTransfer(Request $request){
        try{
            return $this->successResponse($this->services->prepareTransfer($request));
        }catch(\Exception  $e){
            return $this->errorResponse($e->getMessage(),  $e->getCode());
        }
    }
}
