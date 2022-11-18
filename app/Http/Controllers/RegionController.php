<?php

namespace App\Http\Controllers;

use App\Models\region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use NunoMaduro\Collision\Adapters\Phpunit\State;

class RegionController extends Controller
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->DateValidate($request);
        $data = $this->getData($request);
        region::create($data);
        return redirect()->back()->with(['message' => 'Region Create Success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\region  $region
     * @return \Illuminate\Http\Response
     */
    public function show(region $region)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\region  $region
     * @return \Illuminate\Http\Response
     */
    public function edit(region $region)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\region  $region
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, region $region)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\region  $region
     * @return \Illuminate\Http\Response
     */
    public function destroy(region $region)
    {
        //
    }

    //validation
    private function DateValidate($request){
        Validator::make( $request->all() ,[
            'region' => 'required',  'max:255',
        ])->validate();
    }

    //get Data
    private function getData($request)
    {
        return [
            'name' => $request->region,
        ];
    }
}
