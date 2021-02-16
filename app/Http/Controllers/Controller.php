<?php

namespace App\Http\Controllers;

use App\Service\AbstractService;
use App\Traits\ApiResponser;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $services;
    use ApiResponser;

    public function __construct(Model $model)
    {
        $this->services = new AbstractService($model);
    }

    public function getAll(Request $request)
    {
        try {
            return $this->successResponse($this->services->getAll($request));
        } catch (Exception  $e) {
            return $this->errorResponse($e->getMessage(), $e->getCode());
        }
    }

    public function store(Request $request)
    {
        try {
            return $this->successResponse($this->services->create($request));
        } catch (Exception  $e) {
            return $this->errorResponse($e->getMessage(), $e->getCode());
        }
    }

    public function show($id)
    {
        try {
            return $this->successResponse($this->services->getById($id));
        } catch (Exception  $e) {
            return $this->errorResponse($e->getMessage(), $e->getCode());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            return $this->successResponse($this->services->update($request, $id));
        } catch (Exception  $e) {
            return $this->errorResponse($e->getMessage(), $e->getCode());
        }
    }

    public function destroy(Request $request, $id)
    {
        try {
            return $this->successResponse($this->services->delete($request, $id));
        } catch (Exception  $e) {
            return $this->errorResponse($e->getMessage(), $e->getCode());
        }
    }


}
