<?php

namespace App\Repository\Backend\Blog;

// use App\Models\Admin\Clie
use App\Models\Admin\Blogs;
use App\Repository\Backend\BlogInterface;


class Blog implements BlogInterface
{

    public function all()
    {
        return Blogs::get();
    }

    public function get($id)
    {
        return Blogs::find($id);
    }

    public function show($id)
    {
        return Blogs::find($id);
        // return DB::table('Blogs')->where('id', $id)->increment('hit_counter');
    }
    public function store($data)
    {

        return Blogs::create($data);
    }

    public function update($id, array $data)
    {
        return Blogs::find($id)->update($data);
    }

    public function delete($id)
    {
        return Blogs::find($id)->delete();
    }

    public function get_value($slug)
    {
        $row = Blogs::where('slug', '=', $slug)->first();
        return (!empty($row->meta_value)) ? $row->meta_value : '';
    }

}
