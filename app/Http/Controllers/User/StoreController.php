<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Http\Resources\User\UserResource;
use App\Models\User;
use App\Http\Requests\User\StoreRequest;
use Illuminate\Http\Request;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request, ){

        $data= $request->validated();
        $post = $this->service->store($data);

        return new UserResource($post);
//        return redirect()->route('user.create');
    }
}
