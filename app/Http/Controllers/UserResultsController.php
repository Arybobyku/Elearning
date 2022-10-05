<?php

namespace App\Http\Controllers;

use App\Models\UserResults;
use App\Http\Requests\StoreUserResultsRequest;
use App\Http\Requests\UpdateUserResultsRequest;

class UserResultsController extends Controller
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
     * @param  \App\Http\Requests\StoreUserResultsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreUserResultsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserResults  $userResults
     * @return \Illuminate\Http\Response
     */
    public function show(UserResults $userResults)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserResults  $userResults
     * @return \Illuminate\Http\Response
     */
    public function edit(UserResults $userResults)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateUserResultsRequest  $request
     * @param  \App\Models\UserResults  $userResults
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateUserResultsRequest $request, UserResults $userResults)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserResults  $userResults
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserResults $userResults)
    {
        //
    }
}
