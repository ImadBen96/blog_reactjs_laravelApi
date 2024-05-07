<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
           "title" => "A Simple Title",
           "slug"  => Str::slug("A Simple Title"),
           "body" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
           "image" => "post-1.jpg",
           "user_id" =>1,
           "category_id" =>1,
            "is_recent" =>"1",
            "is_most_read" =>"0",
            "is_featured" =>"0",
        ]);
        Post::create([
            "title" => "Introduction To Javascript",
            "slug"  => Str::slug("Introduction To Javascript"),
            "body" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            "image" => "post-2.jpg",
            "user_id" =>1,
            "category_id" =>2,
            "is_recent" =>"1",
            "is_most_read" =>"0",
            "is_featured" =>"0",
        ]);
        Post::create([
            "title" => "Introduction To Laravel",
            "slug"  => Str::slug("Introduction To Laravel"),
            "body" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            "image" => "post-2.jpg",
            "user_id" =>1,
            "category_id" =>3,
            "is_recent" =>"0",
            "is_most_read" =>"1",
            "is_featured" =>"0",
        ]);
    }
}
