<?php

namespace App\Http\Controllers;

use App\Models\WebUser;
use App\Http\Requests\StoreWebUserRequest;
use App\Http\Requests\UpdateWebUserRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class WebUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWebUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWebUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WebUser  $webUser
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request): \Illuminate\Http\Response
    {
        //
        $user  = WebUser::where('email',$request['email'])->first();

        if (!isset($user) || ($user && !(Hash::check($request['password'],$user->password)))){
            return response()->json(['error'=>'Incorrect Password'],500);
        }
        else {
            Auth::login($user);
            return response()->json(['data'=>$user]);
        }
    }
    public function login(Request $request): Response|JsonResponse
    {
        $user  = webuser::where('email',$request['email'])->first();

        if (!isset($user) || ($user && !(Hash::check($request['password'],$user->password)))){
            return response()->json(['error'=>'Incorrect Password'],500);
        }
        else {
            Auth::login($user);
            return response()->json(['data'=>$user]);
        }
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WebUser  $webUser
     * @return \Illuminate\Http\Response
     */
    public function edit(WebUser $webUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWebUserRequest  $request
     * @param  \App\Models\WebUser  $webUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWebUserRequest $request, WebUser $webUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WebUser  $webUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(WebUser $webUser)
    {
        //
    }
}
