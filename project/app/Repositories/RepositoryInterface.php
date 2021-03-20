<?php


namespace App\Repositories;

use Exception;
use Illuminate\Database\Eloquent\Model;

interface RepositoryInterface
{
    public function findById(int $id);

    public function getAll();

    public function create();
}
