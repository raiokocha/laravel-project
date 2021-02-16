<?php

namespace App\Service;

use App\Models\Wallet;
use App\Repositories\Repository;
use App\Repositories\WalletRepository;
use Illuminate\Database\Eloquent\Model;

class UserService extends AbstractService
{
    public $repository;
    public $walletRepository;

    public function __construct(Model $model)
    {
        parent::__construct($model);
        $this->repository = new Repository($model);
        $this->walletRepository = new WalletRepository(new Wallet());
    }
}
