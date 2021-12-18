<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    // public function test_example()
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }

    public function test_registration()
    {
        $formData = [
            'first_name'=>'Abdulahmed',
            'middle_name'=>'Olayiwola',
            'last_name'=>'Abdulhakeem',
            'email'=>'contactlovietech2@gmail.com',
            'phone'=>'08166781199',
            'pic_url'=>'jgdsf.jpg',
            'password'=>'123456',
            'is_disabled'=>'0'
        ];
        $this->withoutExceptionHandling();
        $this->post('api/auth/register', $formData)
            ->assertStatus(self::HTTP_CREATED);
    }

    public function test_login()
    {
        $formData = [
            'email'=>'contactlovietech2@gmail.com',
            'password'=>'123456'
        ];
        $this->withoutExceptionHandling();
        $this->post('api/auth/login', $formData)
            ->assertStatus(self::HTTP_OK);
    }

}
