<?php

namespace App\Models;

use App\Http\Traits\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategoryDetails extends Model
{
    use HasFactory, Translatable;

    protected $guarded = ['id'];
    // protected $fillable = ['category_id', 'language_id', 'name', 'details'];

    protected $casts = [
        'details' => 'object'
    ];

    public function category(){
        return $this->belongsTo(BlogCategory::class, 'blog_category_id');
    }
}
