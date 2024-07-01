<?php

namespace App\Modules\ContactUs\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Controllers\CRUDController;
use App\Modules\ContactUs\Models\ContactUs;
use App\Modules\ContactUs\Requests\ListRequest;
use App\Modules\ContactUs\Resources\ContactUsResource;
use App\Modules\ContactUs\Resources\ListContactUsResource;
use App\Modules\ContactUs\Resources\ContactUsEditResource;;

class adminController extends Controller
{
    // index
    public function index()
    {
        $data = ContactUs::orderBy('id', 'desc')->get();
        $data['data'] = ListContactUsResource::collection($data);
        return response()->json([
            'success' => true,
            'data' => $data
        ], 200);
    }

    // show
    public function show($id)
    {
        $data = ContactUs::find($id);
        if (!$data) {
            return response()->json([
                'success' => false,
                'message' => 'ContactUs not found'
            ], 404);
        }
        return response()->json([
            'success' => true,
            'data' => new ContactUsResource($data)
        ], 200);
    }
    // delete
    public function destroy($id)
    {
        $data = ContactUs::find($id);
        if (!$data) {
            return response()->json([
                'success' => false,
                'message' => 'ContactUs not found'
            ], 404);
        }
        $data->delete();
        return response()->json([
            'success' => true,
            'message' => 'ContactUs deleted successfully'
        ], 200);
    }
}
