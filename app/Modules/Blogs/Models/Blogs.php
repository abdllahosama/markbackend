<?php

namespace App\Modules\Blogs\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Modules\BlogCategories\Models\BlogCategories;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Blogs extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'blogs';

    protected $guarded = [];

    public function blogCategories()
    {
        return $this->belongsTo(BlogCategories::class, 'blog_categories_id');
    }

}
