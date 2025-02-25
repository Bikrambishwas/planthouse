<?php

namespace App\Repository\Backend\Sitesetting;

use App\Models\Admin\Sitesettings;
use App\Repository\Backend\SitesettingInterface;


class Sitesetting implements SitesettingInterface
{

    public function all()
    {
        return Sitesettings::get();
    }

    public function get($id)
    {
        return Sitesettings::find($id);
    }

    public function show($id)
    {
        return Sitesettings::find($id);
        // return DB::table('Sitesettings')->where('id', $id)->increment('hit_counter');
    }
    public function store($data)
    {

        return Sitesettings::create($data);
    }

    public function update($id, array $data)
    {
        return Sitesettings::find($id)->update($data);
    }

    public function delete($id)
    {
        return Sitesettings::find($id)->delete();
    }

    public function get_value($slug)
    {
        $row = Sitesettings::where('slug', '=', $slug)->first();
        return (!empty($row->meta_value)) ? $row->meta_value : '';
    }

    public function make_position($position)
    {
        $total = Sitesettings::where('position', '=', $position)->count();
        return $total + 1;
    }
}
