<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       User::factory(5)->create();

        Category::create([
            'name' => 'Barang Baru',
            'slug' => 'barang-baru'
        ]);
        Category::create([
            'name' => 'Barang Bekas',
            'slug' => 'barang-bekas'
        ]);
        Category::create([
            'name' => 'Barang Original',
            'slug' => 'barang-original'
        ]);



        Post::factory(10)->create();

    }
}
