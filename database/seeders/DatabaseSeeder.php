<?php

namespace Database\Seeders;

use App\Models\Category;
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
        User::factory(3)->create();

        // User::create([
        //     'name' => 'Bagus Wicaksono',
        //     'email' => 'bagus@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Ahmad',
        //     'email' => 'ahmad@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci ad iste iure, est laudantium distinctio facilis eaque voluptate ratione ducimus magnam dignissimos nisi blanditiis maxime nam pariatur corrupti id. Necessitatibus deserunt,',
        //     'body' => '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci ad iste iure, est laudantium distinctio facilis eaque voluptate ratione ducimus magnam dignissimos nisi blanditiis maxime nam pariatur corrupti id. Necessitatibus deserunt, earum quam veritatis provident animi voluptate beatae dolore ex omnis porro amet assumenda perferendis tempore.</p> <p> Suscipit minus aliquid dolorem reprehenderit laboriosam vitae culpa dicta dignissimos similique odio aspernatur optio corrupti, labore nemo in, fugiat at illo et molestias laudantium magnam nam laborum! Ullam maxime dolores maiores earum, odit quas impedit a porro, voluptate debitis cupiditate necessitatibus! Cum commodi illo nulla ad laborum dicta sed earum quibusdam, facilis tenetur. Quis? </p> <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci ad iste iure, est laudantium distinctio facilis eaque voluptate ratione ducimus magnam dignissimos nisi blanditiis maxime nam pariatur corrupti id. Necessitatibus deserunt, earum quam veritatis provident animi voluptate beatae dolore ex omnis porro amet assumenda perferendis tempore.</p> <p> Suscipit minus aliquid dolorem reprehenderit laboriosam vitae culpa dicta dignissimos similique odio aspernatur optio corrupti, labore nemo in, fugiat at illo et molestias laudantium magnam nam laborum! Ullam maxime dolores maiores earum, odit quas impedit a porro, voluptate debitis cupiditate necessitatibus! Cum commodi illo nulla ad laborum dicta sed earum quibusdam, facilis tenetur. Quis? </p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
    }
}
