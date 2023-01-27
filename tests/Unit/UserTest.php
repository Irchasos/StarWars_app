<?php

namespace Tests\Unit;

use App\Models\User;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_login_form()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }

    public function test_user_duplication()
    {

        $user1 = User::make([
            'name' => 'Joe Doe',
            'email' => 'joedoe@gmail.com',
        ]);
        $user2 = User::make([
            'name' => 'Joe ',
            'email' => 'joe@gmail.com',
        ]);
        $this->assertTrue($user1->name != $user2->name);

    }

    public function test_delete_user()
    {
        $user = User::factory()->count(1)->make();
        $user = User::first();
        if ($user) {
            $user->delete();
        }
        $this->assertTrue(true);
    }

    public function test_it_stores_new_users()
    {
        $response = $this->post('/register', [
            'Name' => 'Dary',
            'Email' => 'dary@gmail.com',
            'password' => 'dary1234',
        ]);
        $response->assertRedirect('/index');
    }
}
