<?php

namespace App\Modules\ContactUs\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\CRUDController;
use App\Modules\ContactUs\Models\ContactUs;
use App\Modules\ContactUs\Requests\StoreRequest;
use App\Modules\ContactUs\Resources\ContactUsResource;

class FrontController extends Controller
{
    //    store function
    public function store(StoreRequest $request)
    {
        $contant =  ContactUs::create($request->all());
        return response()->json([
            'success' => true,
            'data' => new ContactUsResource($contant),
            'message' => 'Your message has been sent successfully'
        ], 200);
    }
}
