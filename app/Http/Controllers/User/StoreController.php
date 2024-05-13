<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\User\StoreRequest;
use Illuminate\Http\Request;

class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request, ){
        $data= $request->validated();
//        User::create($data);
        $this->service->store($data);
        return redirect()->route('user.create');
    }
}
