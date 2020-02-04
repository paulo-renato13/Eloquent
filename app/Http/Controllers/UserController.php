<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\Users as UserResource;
use App\User;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $paginator = User::paginate(3);
        $user = UserResource::collection($paginator);
        $last = $paginator->lastPage();
        return response()->json([$user,$last]);
    }

    public function resource() {
        return response()->json(UserResource::collection(User::paginate(3)));
    }

    
}
