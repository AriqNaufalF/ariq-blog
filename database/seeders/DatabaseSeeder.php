<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        User::create([
            'name' => 'Ariq Naufal',
            'username' => 'ariqnaufalf',
            'email' => 'ariqnaufalf@student.telkomuniversity.ac.id',
            'password' => bcrypt('password')
        ]);

        User::factory(4)->create();
        Post::factory(15)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'Gaming',
            'slug' => 'gaming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);


        // Post::create([
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Blanditiis voluptas quisquam eum tempora fuga ipsam, expedita, libero rem pariatur eveniet architecto explicabo delectus cum voluptatibus! Excepturi, eligendi quae? Aperiam ea tenetur in natus dolorum consectetur veritatis provident repellendus et? Amet autem, quod et, natus quae facilis minus perferendis ut ipsam quas ullam exercitationem, distinctio dolorum molestias modi. Cupiditate fugiat quis soluta adipisci, reprehenderit ex nesciunt quibusdam sit vel ipsam maxime iure necessitatibus quam consequuntur. Alias praesentium doloribus exercitationem esse, commodi beatae ea dignissimos id, laborum animi nam! Nisi dolorum consequatur, incidunt corrupti alias voluptate blanditiis, et esse quidem facere beatae.</p>'
        // ]);
    }
}
