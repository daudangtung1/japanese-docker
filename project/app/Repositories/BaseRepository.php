<?php


namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class BaseRepository implements RepositoryInterface
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function findById(int $id)
    {
        // TODO: Implement findById() method.
        return $this->model->where('id', $id)->first();
    }

    public function getAll(){
        return $this->model->all();
    }

    public function create()
    {
        // TODO: Implement create() method.
        return $this->model->create();
    }
}
