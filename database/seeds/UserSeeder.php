<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=User::create([ 
            'name'=> 'user1', 
            'email'=>'user1@test.com', 
            'password'=>bcrypt('password') 
        ]); 
        $user->assignRole('user'); 
        // $user=User::create([ 
        //     'name'=> 'user', 
        //     'email'=>'user@test.com', 
        //     'password'=>bcrypt('password')
        // ]); 
        // $admin->assignRole('user');
    }
}
