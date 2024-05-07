<?php

namespace Database\Seeders;

use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Comment::create([
           "body" => "Some Comment Here From A Simple User",
           "user_id" => 1,
           "post_id" => 1,
        ]);
        Comment::create([
            "body" => "Some Comment Here From A Simple User",
            "user_id" => 1,
            "post_id" => 2,
        ]);
        Comment::create([
            "body" => "Some Comment Here From A Simple User",
            "user_id" => 1,
            "post_id" => 3,
        ]);
    }
}
