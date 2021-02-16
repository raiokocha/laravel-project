<?php

namespace App\Service;

use App\Repositories\Repository;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Response;

class AbstractService
{
    public $repository;
    protected $model;


    public function __construct(Model $model)
    {
        $this->model = $model;
        $this->repository = new Repository($model);
    }

    public function all()
    {
        try {
            return $this->repository->all();
        } catch (Exception  $e) {
            throw new Exception("Ocorreu algum erro :" . $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function getAll($request)
    {
        try {
            return $this->repository->getAll($request->query());
        } catch (Exception  $e) {
            throw new Exception("Ocorreu algum erro :" . $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }

    }


    public function getById($id)
    {
        $entityDB = (object)$this->repository->getById($id);
        $checkEntity = (array)$entityDB;
        if ($checkEntity) {
            return $entityDB;
        } else {
            throw new Exception('Error', Response::HTTP_FORBIDDEN);
        }
    }

    public function create($entity)
    {
        try {
            $data['entity'] = $entity->all();
            return $this->repository->create($this->model->toCreate($data));
        } catch (Exception  $e) {
            throw new Exception("Error :" . $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

    public function update($entity, $id)
    {
        $entityDB = (object)$this->repository->getById($id);
        $checkEntity = (array)$entityDB;
        if ($checkEntity) {
            return $this->repository->update($entity->all(), $id);
        } else {
            throw new Exception('Error', Response::HTTP_FORBIDDEN);
        }
    }

    public function delete($entity, $id)
    {
        try {
            return $this->repository->delete($id);
        } catch (Exception  $e) {
            throw new Exception("Error :" . $e->getMessage(), Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }

}
