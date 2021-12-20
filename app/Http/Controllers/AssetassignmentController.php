<?php

namespace App\Http\Controllers;

use App\Events\AssetAssignmentEvent;
use App\Models\Assetassignment;
use App\Http\Requests\StoreassetassignmentRequest;
use App\Http\Requests\UpdateassetassignmentRequest;
use App\Http\Resources\AssetassignmentResource;
use App\Http\Resources\AssetResource;
use App\Notifications\AssetAssignmentNotification;
use Illuminate\Support\Facades\Notification;

class AssetassignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AssetassignmentResource::collection(Assetassignment::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreassetassignmentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreassetassignmentRequest $request)
    {
        $assetassignment = Assetassignment::create([
            'asset_id'=>$request->asset_id,
            'assignment_date'=>$request->assignment_date,
            'status'=>$request->status,
            'is_due'=>$request->is_due,
            'due_date'=>$request->due_date,
            'assigned_user_id'=>$request->assigned_user_id,
            'assigned_by'=>$request->assigned_by
        ]);
        event(new AssetAssignmentEvent('New Asset Assignment Added'));
        return new AssetassignmentResource($assetassignment);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Assetassignment  $assetassignment
     * @return \Illuminate\Http\Response
     */
    public function show(Assetassignment $assetassignment)
    {
        return new AssetassignmentResource($assetassignment);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Assetassignment  $assetassignment
     * @return \Illuminate\Http\Response
     */
    public function edit(Assetassignment $assetassignment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateassetassignmentRequest  $request
     * @param  \App\Models\Assetassignment  $assetassignment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateassetassignmentRequest $request, Assetassignment $assetassignment)
    {
        // $user = Assetassignment::find(1);

        $assetassignment->update([
            'asset_id'=>$request->asset_id,
            'assignment_date'=>$request->assignment_date,
            'status'=>$request->status,
            'is_due'=>$request->is_due,
            'due_date'=>$request->due_date,
            'assigned_user_id'=>$request->assigned_user_id,
            'assigned_by'=>$request->assigned_by
        ]);

        // Notification::send($user, new AssetAssignmentNotification($request->input('asset_id')));
        return new AssetassignmentResource($assetassignment);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\assetassignment  $assetassignment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assetassignment $assetassignment)
    {
        $assetassignment->delete();
        return response()->json(['message' => 'Deleted Successfully']);
    }
}
