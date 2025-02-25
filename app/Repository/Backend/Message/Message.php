<?php

namespace App\Repository\Backend\Message;

// use App\Models\Admin\Clie
use App\Models\Admin\Messages;
use App\Repository\Backend\MessageInterface;


class Message implements MessageInterface
{

    public function all()
    {
        return Messages::get();
    }

    public function get($id)
    {
        return Messages::find($id);
    }

    public function show($id)
    {
        return Messages::find($id);
        // return DB::table('Messages')->where('id', $id)->increment('hit_counter');
    }
    public function store($data)
    {

        return Messages::create($data);
    }

    public function update($id, array $data)
    {
        return Messages::find($id)->update($data);
    }

    public function delete($id)
    {
        return Messages::find($id)->delete();
    }

    public function get_value($slug)
    {
        $row = Messages::where('slug', '=', $slug)->first();
        return (!empty($row->meta_value)) ? $row->meta_value : '';
    }

}
