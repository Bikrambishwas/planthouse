<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
        'title','image','slug','short_description','description','seo_description','status','seo_title','gallery_images','details','category_id','show','keyword','type','details','marked_price','selling_price'
    ];
}
