<?php

namespace App\Repositories\Interfaces;

interface PolicyCateogryRepoRepositoryInterface
{
    public function all();

    public function create(array $data);

    public function update(array $data, $id);

    public function delete($id);

    public function show($id);

    public function find($id);

    public function getModel();
}
