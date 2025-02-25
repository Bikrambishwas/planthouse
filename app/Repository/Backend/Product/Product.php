<?php

namespace App\Repository\Backend\Product;

// use App\Models\Admin\Clie
use App\Models\Admin\Products;
use App\Repository\Backend\ProductInterface;


class Product implements ProductInterface
{

    public function all()
    {
        return Products::get();
    }

    public function get($id)
    {
        return Products::find($id);
    }

    public function show($id)
    {
        return Products::find($id);
        // return DB::table('Products')->where('id', $id)->increment('hit_counter');
    }
    public function store($data)
    {

        return Products::create($data);
    }

    public function update($id, array $data)
    {
        return Products::find($id)->update($data);
    }

    public function delete($id)
    {
        return Products::find($id)->delete();
    }

    public function get_value($slug)
    {
        $row = Products::where('slug', '=', $slug)->first();
        return (!empty($row->meta_value)) ? $row->meta_value : '';
    }

}
