<?php

namespace App\Http\Controllers;

use App\Events\AssetEvent;
use App\Models\Asset;
use App\Http\Requests\StoreAssetRequest;
use App\Http\Requests\UpdateAssetRequest;
use App\Http\Resources\AssetResource;


class AssetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AssetResource::collection(Asset::all());
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
     * @param  \App\Http\Requests\StoreAssetRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAssetRequest $request)
    {
        $asset = Asset::create([
            'type'=>$request->type,
            'serial_number'=>$request->serial_number,
            'description'=>$request->description,
            'fixed_or_Movable'=>$request->fixed_or_Movable,
            'picture_path'=>$request->picture_path,
            'purchase_date'=>$request->purchase_date,
            'start_use_date'=>$request->start_use_date,
            'purchase_price'=>$request->purchase_price,
            'warranty_expiry_date'=>$request->warranty_expiry_date,
            'degradation_in_years'=>$request->degradation_in_years,
            'current_value_in_naira'=>$request->current_value_in_naira,
            'location'=>$request->location
        ]);
        event(new AssetEvent('New Asset Added'));
        return new AssetResource($asset);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function show(Asset $asset)
    {
        return new AssetResource($asset);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function edit(Asset $asset)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAssetRequest  $request
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAssetRequest  $request, Asset $asset)
    {
        $asset->update([
            'type'=>$request->type,
            'serial_number'=>$request->serial_number,
            'description'=>$request->description,
            'fixed_or_Movable'=>$request->fixed_or_Movable,
            'picture_path'=>$request->picture_path,
            'purchase_date'=>$request->purchase_date,
            'start_use_date'=>$request->start_use_date,
            'purchase_price'=>$request->purchase_price,
            'warranty_expiry_date'=>$request->warranty_expiry_date,
            'degradation_in_years'=>$request->degradation_in_years,
            'current_value_in_naira'=>$request->current_value_in_naira,
            'location'=>$request->location
        ]);
        return new AssetResource($asset);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Asset  $asset
     * @return \Illuminate\Http\Response
     */
    public function destroy(Asset $asset)
    {
        $asset->delete();
        return response()->json(['message' => 'Deleted Successfully']);
    }
}
