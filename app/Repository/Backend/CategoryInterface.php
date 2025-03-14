<?php

namespace App\Repository\Backend;

interface CategoryInterface
{

    public function all();
    public function get_parents();
    public function get($id);
    public function make_position($parent);
    public function show($id);

    public function store($data);

    public function update($id, array $data);

    public function delete($id);

    public function get_value($slug);

}
