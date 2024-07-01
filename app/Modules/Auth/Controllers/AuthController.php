<?php

namespace App\Modules\Auth\Controllers;

use Illuminate\Http\Request;
use App\Modules\Auth\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Modules\Auth\Requests\LoginRequest;
use App\Modules\Auth\Requests\UpdateRequest;
use App\Modules\Auth\Resources\UserStoreResource;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

    public function login(LoginRequest $request)
    {
        $user = User::query()->where('email', $request->email)->first();

        $cred = ['email' => $request['email'], 'password' => $request['password']];

        if (Auth::guard('web')->attempt($cred)) {
            $userStore = Auth::guard('web')->user();
            $user = UserStoreResource::make($userStore)->toArray($request);
            $user['accessToken'] = $userStore->createToken('store-token', ['web'])->plainTextToken;
            return $this->sendResponse($user, __('api.login successfully'));
        } else {
            return $this->sendError(__('api.Incorrect Email Or Password'));
        }
    }

    public function logout(Request $request)
    {
        $user = Auth::guard('sanctum')->user();
        if ($user) {
            $user->tokens()->where('id', $user->currentAccessToken()->id)->delete();
        }

        return $this->sendResponse(null, __('api.Logged out successfully'));
    }

    public function update(UpdateRequest $request)
    {
        $user = Auth::guard('sanctum')->user();
        request()->has('password') ? $request['password'] = Hash::make($request['password']) : '';
        $user->update($request->all());
        return $this->sendResponse(new UserStoreResource($user), __('api.updated successfully'));
    }

    // edit
    public function edit()
    {
        $user = Auth::guard('sanctum')->user();
        return $this->sendResponse(new UserStoreResource($user), __('api.show successfully'));
    }
}
