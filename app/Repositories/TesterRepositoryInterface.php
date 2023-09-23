<?php
namespace App\Repositories;

use App\Models\Tester;

interface TesterRepositoryInterface
{
    public function getAll();
    public function getById($id);
    public function create(array $attributes): Tester;
    public function update($id, array $attributes): bool;
    public function delete($id): bool;
}
