<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class VendorTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index()
    {
        $response = $this->get('/api/auth/vendors');
        $response->assertStatus(200);
    }

    public function test_store()
    {
        $vendorData = [
            'name'=>'Hi',
            'category'=>'Hi'
        ];
        $response = $this->post('/api/auth/vendors', $vendorData);
        $response->assertStatus(201);
    }
}
