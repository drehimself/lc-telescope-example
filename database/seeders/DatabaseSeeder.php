<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'email' => 'user@user.com',
        ]);

        User::factory()->create([
            'email' => 'another@another.com',
        ]);

        Post::factory()->create([
            'user_id' => 1,
            'title' => 'My First Post',
            'content' => 'Content for my first post',
        ]);
    }
}
