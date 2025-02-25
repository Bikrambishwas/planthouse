<?php

namespace App\Repository\Backend;

interface AdminInterface
{
    public function getById($member_id);
    public function getByEmail($email);

    public function getAll();

    public function create(array $data);

    public function update($id, array $data);

    public function delete($id);
}
