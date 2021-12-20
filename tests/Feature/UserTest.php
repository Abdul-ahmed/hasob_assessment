<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Tymon\JWTAuth\Facades\JWTAuth;

class UserTest extends TestCase
{
    // use DatabaseMigrations;
    use RefreshDatabase;
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
        $this->withoutExceptionHandling();
        $userData = [
            'first_name'=>'Abdulahmed',
            'middle_name'=>'Olayiwola',
            'last_name'=>'Abdulhakeem',
            'email'=>'contactlovietech2@gmail.com',
            'phone'=>'08166781199',
            'pic_url'=>'jgdsf.jpg',
            'password'=>'123456',
            'is_disabled'=>'0'
        ];
        $this->post('api/auth/register', $userData)
            ->assertStatus(self::HTTP_CREATED);
    }

    public function test_login()
    {
        $this->withoutExceptionHandling();

        $user = User::factory()->create()->first();
        $hasUser = $user ? true : false;
        $this->assertTrue($hasUser);
        $response = $this->actingAs($user, 'api')->withSession(['banned' => false])->post('api/auth/login', [
            'first_name'=>'Abdulahmed',
            'middle_name'=>'Olayiwola',
            'last_name'=>'Abdulhakeem',
            'email'=>'contactlovietech2@gmail.com',
            'phone'=>'08166781199',
            'pic_url'=>'jgdsf.jpg',
            'password'=>'123456',
            'is_disabled'=>'0'
        ]);
        $response->assertStatus(self::HTTP_OK);
    }

    public function test_profile()
    {
        $this->get('api/auth/profile')
            ->assertStatus(self::HTTP_OK);
    }

    public function test_logout()
    {
        $this->withoutExceptionHandling();

        $user = User::factory()->create()->first();
        $hasUser = $user ? true : false;
        $this->assertTrue($hasUser);
        
        $response = $this->actingAs($user, 'api')->withSession([
            'first_name'=>'Abdulahmed',
            'middle_name'=>'Olayiwola',
            'last_name'=>'Abdulhakeem',
            'email'=>'contactlovietech2@gmail.com',
            'phone'=>'08166781199',
            'pic_url'=>'jgdsf.jpg',
            'password'=>'123456',
            'is_disabled'=>'0'
        ])->post('api/auth/logout');
        $response->assertStatus(self::HTTP_OK);
    }

}
