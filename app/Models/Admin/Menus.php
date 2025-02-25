<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menus extends Model
{
    use HasFactory;
    protected $table= 'menuses';
    protected $fillable = [
         'title','slug','menu_structure','show'
    ];
}
