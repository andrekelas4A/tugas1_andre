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
        \App\Models\User::factory(10)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Ahmad Andre',
            'email' => 'andre1@gmail.com',
            'password' => bcrypt('12345')
        ]);
        
        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        Post::create([
            'title' => 'Judul Pertama',
            'slug' => 'judul-pertama',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis rem sequi placeat dolores, tenetur ullam repudiandae aut temporibus doloremque in?',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, culpa. Molestias repudiandae qui quas nihil necessitatibus rerum totam fugit, error nostrum pariatur eos rem explicabo debitis commodi doloribus quam non modi cupiditate neque similique nulla reiciendis aspernatur. Eveniet, quae omnis dolorum mollitia ipsam magni laborum aliquid? Voluptates, dicta inventore. Perferendis molestiae rem dolor accusamus nam. Quasi numquam animi sunt inventore, explicabo aliquid commodi, exercitationem ex provident officiis, quam nihil fugit corrupti et iste doloremque ad? Aliquid, aspernatur impedit distinctio quasi repudiandae, dolor qui accusamus excepturi ipsam ea esse optio natus iure placeat quia tempora expedita ratione sint maiores. Earum, optio.',
            'category_id' =>1,
            'user_id' =>1
        ]);

        Post::create([
            'title' => 'Judul Ke Dua',
            'slug' => 'judul-kedua',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis rem sequi placeat dolores, tenetur ullam repudiandae aut temporibus doloremque in?',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, culpa. Molestias repudiandae qui quas nihil necessitatibus rerum totam fugit, error nostrum pariatur eos rem explicabo debitis commodi doloribus quam non modi cupiditate neque similique nulla reiciendis aspernatur. Eveniet, quae omnis dolorum mollitia ipsam magni laborum aliquid? Voluptates, dicta inventore. Perferendis molestiae rem dolor accusamus nam. Quasi numquam animi sunt inventore, explicabo aliquid commodi, exercitationem ex provident officiis, quam nihil fugit corrupti et iste doloremque ad? Aliquid, aspernatur impedit distinctio quasi repudiandae, dolor qui accusamus excepturi ipsam ea esse optio natus iure placeat quia tempora expedita ratione sint maiores. Earum, optio.',
            'category_id' =>1,
            'user_id' =>1
        ]);

        Post::create([
            'title' => 'Judul Ke Tiga',
            'slug' => 'judul-ketiga',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis rem sequi placeat dolores, tenetur ullam repudiandae aut temporibus doloremque in?',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, culpa. Molestias repudiandae qui quas nihil necessitatibus rerum totam fugit, error nostrum pariatur eos rem explicabo debitis commodi doloribus quam non modi cupiditate neque similique nulla reiciendis aspernatur. Eveniet, quae omnis dolorum mollitia ipsam magni laborum aliquid? Voluptates, dicta inventore. Perferendis molestiae rem dolor accusamus nam. Quasi numquam animi sunt inventore, explicabo aliquid commodi, exercitationem ex provident officiis, quam nihil fugit corrupti et iste doloremque ad? Aliquid, aspernatur impedit distinctio quasi repudiandae, dolor qui accusamus excepturi ipsam ea esse optio natus iure placeat quia tempora expedita ratione sint maiores. Earum, optio.',
            'category_id' =>2,
            'user_id' =>4
        ]);

        Post::create([
            'title' => 'Judul Ke Empat',
            'slug' => 'judul-keempat',
            'excerpt' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis rem sequi placeat dolores, tenetur ullam repudiandae aut temporibus doloremque in?',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt, culpa. Molestias repudiandae qui quas nihil necessitatibus rerum totam fugit, error nostrum pariatur eos rem explicabo debitis commodi doloribus quam non modi cupiditate neque similique nulla reiciendis aspernatur. Eveniet, quae omnis dolorum mollitia ipsam magni laborum aliquid? Voluptates, dicta inventore. Perferendis molestiae rem dolor accusamus nam. Quasi numquam animi sunt inventore, explicabo aliquid commodi, exercitationem ex provident officiis, quam nihil fugit corrupti et iste doloremque ad? Aliquid, aspernatur impedit distinctio quasi repudiandae, dolor qui accusamus excepturi ipsam ea esse optio natus iure placeat quia tempora expedita ratione sint maiores. Earum, optio.',
            'category_id' =>2,
            'user_id' =>3
        ]);

    }
}
