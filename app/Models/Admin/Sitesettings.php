<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sitesettings extends Model
{
    use HasFactory;
    protected $table = 'sitesettings';
    protected $fillable = ['slug', 'meta_key', 'meta_value', 'group', 'type', 'position'];
}
