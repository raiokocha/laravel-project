<?php

namespace App\Repositories;


class WalletRepository extends Repository{

    public function getByIdUser($id)
    {
        return $this->model
            ->where('id_user', $id)
            ->first();
    }

    public function setAmount($id,$amount)
    {
        return $this->model
            ->where('id_user', $id)
            ->update(['value' => $amount]);
    }

}
