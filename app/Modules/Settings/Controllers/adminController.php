<?php

namespace App\Modules\Settings\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Settings\Models\Settings;
use App\Modules\Settings\Requests\StoreRequest;
use App\Modules\Settings\Requests\UpdateRequest;
use App\Modules\Settings\Resources\SettingsResource;
use App\Modules\Settings\Resources\SettingsEditResource;




class adminController extends Controller
{

    // store if there is no settings
    public function store(StoreRequest $request)
    {
        $settings_count = Settings::count();
        if ($settings_count > 0) {
            return response()->json([
                'success' => false,
                'message' => 'Settings already exist'
            ], 400);
        }
        if ($request->has('social_links')) {
            $request->merge(['social_links' => json_encode($request->social_links)]);
        }
        $settings = Settings::create($request->all());
        return response()->json([
            'success' => true,
            'message' => 'Settings created successfully',
            'data'    => new SettingsResource($settings)
        ], 200);
    }

    // edit settings id = 1
    public function edit()
    {
        $settings = Settings::find(1);
        if (!$settings) {
            return response()->json([
                'success' => false,
                'message' => 'Settings not found'
            ], 404);
        }
        return response()->json([
            'success' => true,
            'message' => 'Settings retrieved successfully',
            'data'    => new SettingsEditResource($settings)
        ], 200);
    }

    // update settings id = 1
    public function update(UpdateRequest $request)
    {
        $settings = Settings::find(1);
        if (!$settings) {
            return response()->json([
                'success' => false,
                'message' => 'Settings not found'
            ], 404);
        }
        if ($request->has('social_links')) {
            $request->merge(['social_links' => json_encode($request->social_links)]);
        }
        $settings->update($request->all());
        return response()->json([
            'success' => true,
            'message' => 'Settings updated successfully',
            'data'    => new SettingsResource($settings)
        ], 200);
    }



}
