<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\FooterResource;
use App\Http\Requests\FooterRequest;
use App\Models\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return FooterResource::collection(Footer::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FooterRequest $request)
    {
        $footer = Footer::create($request->validated());

        return new FooterResource($footer);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Footer  $Footer
     * @return \Illuminate\Http\Response
     */
    public function show(Footer $footer)
    {
        return new FooterResource($footer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function update(FooterRequest $request, Footer $footer)
    {
        $footer->update($request->validated());
        
        return new FooterResource($footer);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Footer  $Footer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Footer $footer)
    {
        $footer->delete();
        
        return response()->noContent();
    }
}