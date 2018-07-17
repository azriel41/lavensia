<?php 
namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

class TestRepo implements model_interface
{
    // model property on class instances
    protected $model;

    // Constructor to bind model to repo
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    // Get all instances of model
    public function all()
    {
        return $this->model->all();
    }

    // create a new record in the database
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    // update record in the database
    public function update(array $data, $column,$value)
    {
        return $this->model->where($column,$value)
                           ->update($data);
    }

    public function update_detail(array $data, $column,$value,$column1,$value1)
    {
        return $this->model
                    ->where($column,$value)
                    ->where($column,$value)
                    ->update($data);
    }

    public function max_detail($column,$value,$param)
    {
        return $this->model->where($column,$value)->max($param)+1;
    }

    // remove record from the database
    public function delete($column,$value)
    {
        return $this->model->where($column,$value)
                           ->delete();
    }

    // show the record with the given id
    public function show($id)
    {
        return $this->model->findOrFail($id);
    }
    public function cari($column,$value)
    {
        return $this->model->where($column,$value)
                           ->first();
    }
    // Get the associated model
    public function getModel()
    {
        return $this->model;
    }

    // Set the associated model
    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }

    // Eager load database relationships
    public function with($relations)
    {
        return $this->model->with($relations);
    }

    public function max($param)
    {
        return $this->model->max($param)+1;
    }

    public function same($column,$value)
    {
        return $this->model->where($column,$value)->first();
    }
}