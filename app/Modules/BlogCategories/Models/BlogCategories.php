<?php

namespace App\Modules\BlogCategories\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogCategories extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'blog_categories';

    protected $guarded = [];

}
