<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_post',
        'image',
        'category_id' //id category
    ];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
