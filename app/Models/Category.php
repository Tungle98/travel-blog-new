<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public $table = "category";
    public $fillable = ['title', 'meta_desc', 'description', 'status','image','slug'];

    public function blogs() {
        return $this->belongsToMany('App\Models\Blog', 'blog_category', 'category_id', 'blog_id');
    }
}
