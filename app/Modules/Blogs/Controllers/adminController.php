<?php

namespace App\Modules\Blogs\Controllers;

use App\Modules\Blogs\Models\Blogs;
use App\Http\Controllers\CRUDController;
use App\Modules\Blogs\Requests\ListRequest;
use App\Modules\Blogs\Requests\StoreRequest;
use App\Modules\Blogs\Requests\UpdateRequest;
use App\Modules\Blogs\Resources\BlogsResource;
use App\Modules\Blogs\Resources\BlogsEditResource;
use App\Modules\Blogs\Resources\ListBlogsResource;




class adminController extends CRUDController
{
    protected $model = Blogs::class;

    protected $showResorse = BlogsResource::class;

    protected $editResorse = BlogsEditResource::class;

    protected $listResorse = ListBlogsResource::class;

    protected $listRequest = ListRequest::class;

    protected $storeRequest = StoreRequest::class;

    protected $updateRequest = UpdateRequest::class;

    protected $searchableColumns = ['id', 'title','description','image','blog_categories_id'];

    protected $filters = ['blog_categories_id', 'created'];
}
