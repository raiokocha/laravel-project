<?php

namespace App\Service;

use App\Models\User;
use App\Models\Wallet;
use App\Repositories\Repository;
use App\Repositories\UserRepository;
use App\Repositories\WalletRepository;
use App\Validation\TransferValidation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Response;
use Exception;

class TransactionService extends AbstractService
{
    public $repository;
    public $userRepository;
    public $walletRepository;

    public function __construct(Model $model)
    {
        parent::__construct($model);
        $this->repository = new Repository($model);
        $this->userRepository = new UserRepository(new User());
        $this->walletRepository = new WalletRepository(new Wallet());
    }

    public function transaction($request)
    {
        
        $this->walletRepository->setAmount($request["id_payer"],$request["amount_payer"]);
        $this->walletRepository->setAmount($request["id_payee"],$request["amount_payee"]);
        

        $data['entity'] = $request->all();
        return $this->repository->create($this->model->toCreate($data));
    }

    public function prepareTransfer($request)
    {

        $company = (object)$this->userRepository->getById($request['id_payer']);
        if ($company['company'] == 1) {
            throw new Exception("Lojistas não fazem transferencia ", Response::HTTP_FORBIDDEN);
        }
        //$externalAuthorizer = TransferValidation::externalAuthorizer('GET', env('URL_AUTHORIZER'));
        //if ($externalAuthorizer->message == "Autorizado") {
            
        $balance_payer = $this->walletRepository->getByIdUser($request['id_payer']);
        $balance_payee = $this->walletRepository->getByIdUser($request['id_payee']);
        
        if ($request['value'] <= $balance_payer['value']){
            
            $request['amount_payer'] = $balance_payer['value'] - $request['value'];
            $request['amount_payee'] = $request['value'] + $balance_payee['value'];

            return $this->transaction($request);
        }else{
            throw new Exception("Você não possui saldo suficiente para continuar a transação", Response::HTTP_FORBIDDEN);
        }

        //}else{
            //throw new Exception("Erro com o autorizador", Response::HTTP_FORBIDDEN);
        //}

    }


}
