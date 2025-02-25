<?php

namespace App\Repository\Backend\Page;

// use App\Models\Admin\Clie
use App\Models\Admin\Pages;
use App\Repository\Backend\PageInterface;


class Page implements PageInterface
{

    public function all()
    {
        return Pages::get();
    }

    public function get($id)
    {
        return Pages::find($id);
    }

    public function show($id)
    {
        return Pages::find($id);
        // return DB::table('Pages')->where('id', $id)->increment('hit_counter');
    }
    public function store($data)
    {

        return Pages::create($data);
    }

    public function update($id, array $data)
    {
        return Pages::find($id)->update($data);
    }

    public function delete($id)
    {
        return Pages::find($id)->delete();
    }

    public function get_value($slug)
    {
        $row = Pages::where('slug', '=', $slug)->first();
        return (!empty($row->meta_value)) ? $row->meta_value : '';
    }

}
