<?php

namespace App\Repository\Backend\Category;

// use App\Models\Admin\Clie
use App\Models\Admin\Categories;
use App\Repository\Backend\CategoryInterface;


class Category implements CategoryInterface
{

    public function all()
    {
        return Categories::get();
    }

    public function get($id)
    {
        return Categories::find($id);
    }

    public function get_parents()
    {
        $parents = [];
        $rows = Categories::where('parent', '=', '0')->get();
        foreach ($rows as $k => $row) :
            $parents[$row->id] = $row->title;
        endforeach;
        return $parents;
    }


    public function make_position($parent)
    {
        $total = Categories::where('parent', '=', $parent)->count();
        return $total + 1;
    }

    public function show($id)
    {
        return Categories::find($id);
        // return DB::table('Categories')->where('id', $id)->increment('hit_counter');
    }
    public function store($data)
    {

        return Categories::create($data);
    }

    public function update($id, array $data)
    {
        return Categories::find($id)->update($data);
    }

    public function delete($id)
    {
        return Categories::find($id)->delete();
    }

    public function get_value($slug)
    {
        $row = Categories::where('slug', '=', $slug)->first();
        return (!empty($row->meta_value)) ? $row->meta_value : '';
    }

}
