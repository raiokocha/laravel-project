<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class Repository implements RepositoryInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->all();
    }

    public function allArray()
    {
        return $this->model->all()->toArray();
    }

    public function getAll($data)
    {
        return  $this->model
            ->where($data)
            ->get();
    }

    public function create($data)
    {
        return $this->model->create($data);
    }

    public function update(array $data, $id)
    {
        $record = (Object) $this->model->find($id);
        $record->update((array) $data);
        return $record;
    }

    public function delete($id)
    {
        $record = (Object) $this->model->find($id);
        $record->status = 0;
        $record->update((array) $record);
        return $record;
    }

    public function show($id)
    {
        return $this->model->findOrFail($id);
    }

    public function getById($id)
    {
        return $this->model
            ->where('id', $id)
            ->first();
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

    public function with($relations)
    {
        return $this->model->with($relations);
    }
}
