<?php

namespace App\Repository\Backend\Faq;

// use App\Models\Admin\Clie
use App\Models\Admin\Faqs;
use App\Repository\Backend\FaqInterface;


class Faq implements FaqInterface
{

    public function all()
    {
        return Faqs::get();
    }

    public function get($id)
    {
        return Faqs::find($id);
    }

    public function show($id)
    {
        return Faqs::find($id);
        // return DB::table('Faqs')->where('id', $id)->increment('hit_counter');
    }
    public function store($data)
    {

        return Faqs::create($data);
    }

    public function update($id, array $data)
    {
        return Faqs::find($id)->update($data);
    }

    public function delete($id)
    {
        return Faqs::find($id)->delete();
    }

    public function get_value($slug)
    {
        $row = Faqs::where('slug', '=', $slug)->first();
        return (!empty($row->meta_value)) ? $row->meta_value : '';
    }

}
