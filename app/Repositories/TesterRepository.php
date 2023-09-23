<?php
namespace App\Repositories;

use App\Models\Tester;

class TesterRepository implements TesterRepositoryInterface
{
    protected $model;

    public function __construct(Tester $tester)
    {
        $this->model = $tester;
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function getById($id)
    {
        return $this->model->find($id);
    }

    public function create(array $attributes): Tester
    {
        return $this->model->create($attributes);
    }

    public function update($id, array $attributes): bool
    {
        return $this->getById($id)->update($attributes);
    }

    public function delete($id): bool
    {
        return $this->getById($id)->delete();
    }
}
