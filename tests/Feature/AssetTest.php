<?php

namespace Tests\Feature;

use App\Models\Asset;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AssetTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index()
    {
        $response = $this->get('/api/auth/assets');
        $response->assertStatus(200);
    }

    public function test_store()
    {
        $assetData = [
            'type'=>'Hi',
            'serial_number'=>'Hi',
            'description'=>'Hi',
            'fixed_or_Movable'=>'Hi',
            'picture_path'=>'Hi',
            'purchase_date'=>'Hi',
            'start_use_date'=>'Hi',
            'purchase_price'=>'Hi',
            'warranty_expiry_date'=>'Hi',
            'degradation_in_years'=>'Hi',
            'current_value_in_naira'=>'Hi',
            'location'=>'Hi'
        ];
        $response = $this->post('/api/auth/assets', $assetData);
        $response->assertStatus(201);
    }

    // public function test_show()
    // {
    //     $response = $this->get("/api/auth/assets/{asset}");
    //     $response->assertStatus(200);
    // }

    // public function test_update()
    // {
    //     $response = $this->put('/api/auth/assets');
    //     $response->assertStatus(200);
    // }

    // public function test_delete()
    // {
    //     $response = $this->delete('/api/auth/assets');
    //     $response->assertStatus(200);
    // }

    // api/auth/assets
    // api/auth/assets 
    // api/auth/assets/{asset} 
    // api/auth/assets/{asset}
    // api/auth/assets/{asset}
}
