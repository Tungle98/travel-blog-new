<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    public $table = "blogs";
    public $fillable = ['title', 'meta_desc', 'description', 'slug', 'content','is_top','status','image'];
    public function categories() {
        return $this->belongsToMany('App\Models\Category', 'blog_category', 'blog_id', 'category_id');
    }
}
