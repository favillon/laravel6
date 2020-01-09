<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'Fabian Villon',
            'email' => 'favillon@hotmail.com',
            'password' => bcrypt('laravel'),
            'is_admin' => true,
        ]);        
        factory(User::class, 48)->create();
    }
}
