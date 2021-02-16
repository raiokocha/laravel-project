<?php

namespace App\Service;

use App\Repositories\Repository;
use Illuminate\Database\Eloquent\Model;

class WalletService extends AbstractService
{
    public $repository;

    public function __construct(Model $model)
    {
        parent::__construct($model);
        $this->repository = new Repository($model);
    }

}
