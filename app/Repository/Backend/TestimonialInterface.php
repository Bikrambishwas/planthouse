<?php

namespace App\Repository\Backend;

interface TestimonialInterface
{

    public function all();

    public function get($id);

    public function show($id);

    public function store($data);

    public function update($id, array $data);

    public function delete($id);

    public function get_value($slug);



}
