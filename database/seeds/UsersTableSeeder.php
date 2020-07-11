<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
            'name' => 'Thoriq Aziz',
            'email' => 'admin@blog.com',
            'password' => bcrypt('password'),
            'admin' => 1
        ]);

        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/img/avatar.png',
            'about' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cumque animi atque culpa, nostrum aliquid quo temporibus tempore sequi adipisci ipsa?',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);
    }
}
