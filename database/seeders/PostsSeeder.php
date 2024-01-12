<?php

namespace Database\Seeders;

use App\Models\Posts;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        // Seed posts data
        $postsData = [
            [
                'title' => 'Title Post 1',
                'image' => 'https://source.unsplash.com/500x400?programmer',
                'body'  => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            ],
            [
                'title' => 'Title Post 2',
                'image' => 'https://source.unsplash.com/500x400?programmer',
                'body'  => 'Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
            ],
            // Add more posts as needed
        ];

        // Loop through the data and insert into the 'posts' table
        foreach ($postsData as $postData) {
            Posts::create($postData);
        }
    }
}
