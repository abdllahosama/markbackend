<?php

namespace App\Modules\BlogCategories\Controllers;

use App\Http\Controllers\CRUDController;
use App\Modules\BlogCategories\Requests\ListRequest;
use App\Modules\BlogCategories\Models\BlogCategories;
use App\Modules\BlogCategories\Requests\StoreRequest;
use App\Modules\BlogCategories\Requests\UpdateRequest;
use App\Modules\BlogCategories\Resources\BlogCategoriesResource;
use App\Modules\BlogCategories\Resources\BlogCategoriesEditResource;
use App\Modules\BlogCategories\Resources\ListBlogCategoriesResource;



class adminController extends CRUDController
{
    protected $model = BlogCategories::class;

    protected $showResorse = BlogCategoriesResource::class;

    protected $editResorse = BlogCategoriesEditResource::class;

    protected $listResorse = ListBlogCategoriesResource::class;

    protected $listRequest = ListRequest::class;

    protected $storeRequest = StoreRequest::class;

    protected $updateRequest = UpdateRequest::class;

    protected $searchableColumns = ['id', 'title'];

    protected $filters = [ 'created'];
}
