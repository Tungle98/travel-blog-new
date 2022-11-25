<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigurationSystem extends Model
{
    use HasFactory;
    public $table = "config_systems";
    public $fillable = ['title', 'status', 'type', 'description'];
}
