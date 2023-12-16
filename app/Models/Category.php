<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['category_id', 'name', 'status'];

    public function parentCategory()
    {
        return $this->belongsTo(Categories::class, 'category_id');
    }

    public function subcategories()
    {
        return $this->hasMany(Categories::class, 'category_id');
    }

    public static function generateUniqueId()
    {
        return Str::uuid();
    }
}
