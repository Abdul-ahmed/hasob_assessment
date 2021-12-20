<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AssetAssignmentTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index()
    {
        $response = $this->get('/api/auth/assetassignments');
        $response->assertStatus(200);
    }

    public function test_store()
    {
        $assetaData = [
            'asset_id'=>'Hi',
            'assignment_date'=>'Hi',
            'status'=>'Hi',
            'is_due'=>'Hi',
            'due_date'=>'Hi',
            'assigned_user_id'=>'Hi',
            'assigned_by'=>'Hi'
        ];
        $response = $this->post('/api/auth/assetassignments', $assetaData);
        $response->assertStatus(201);
    }
}
