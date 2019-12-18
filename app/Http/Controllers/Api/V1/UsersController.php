<?php

namespace App\Http\Controllers\Api\V1;
use App\http\Resources\UserCollection;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StoreUsersRequest;
use App\Http\Requests\Admin\UpdateUsersRequest;

class UsersController extends Controller
{
    public function index()
    {
        $user= User::all();
        return new UserCollection($user);
    }

    public function show($id)
    {
        return User::findOrFail($id);
    }

    public function update(UpdateUsersRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update($request->all());
    
        return $user;
    }

    public function store(StoreUsersRequest $request)
    {
        $user = User::create($request->all());
        

        return $user;
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return '';
    }
}
