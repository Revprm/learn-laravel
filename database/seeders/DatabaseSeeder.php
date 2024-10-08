<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Post::create([
        //     'title' => 'Judul Artikel 1',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'judul-artikel-1',
        //     'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. At ratione ipsum quas quia ea debitis deserunt dicta, nisi quasi perspiciatis voluptatem est voluptas aspernatur quidem sunt aliquid! Est, officiis at.'
        // ]);
    
        $this->call([CategorySeeder::class, UserSeeder::class]);
        

        Post::factory(100)->recycle([
            Category::all(),
            User::all()
        ])->create();
    }
}
