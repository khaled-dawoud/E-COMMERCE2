<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $guarded = [];

    //'parent_id' cuz it shold be category_id
    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id')->withDefault();
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
