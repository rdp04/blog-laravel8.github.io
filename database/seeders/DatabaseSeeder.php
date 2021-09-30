<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
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

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);
        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        User::create([
            'name' => 'Rian Dwi',
            'username' => 'riandwi',
            'email' => 'suckses45@gmail.com',
            'password' => bcrypt('password')
        ]);

        User::factory(3)->create();


        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' =>  'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam ea enim nihil fugit itaque iste esse sequi ratione harum rerum praesentium,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam ea enim nihil fugit itaque iste esse sequi ratione harum rerum praesentium, numquam maxime impedit reprehenderit, omnis temporibus adipisci nulla consequuntur in natus. Odio modi blanditiis beatae itaque ea ipsum minima explicabo natus doloremque nesciunt mollitia voluptatibus, numquam dignissimos error, aut totam, rerum illo facilis accusantium nam repellat nemo repellendus nihil. Molestiae cum vero totam dolorum quod a dolorem eligendi eaque! Animi dicta, debitis omnis exercitationem sint aliquid et, officiis sequi odit incidunt necessitatibus repellat voluptatibus? Facere obcaecati inventore officia perferendis recusandae fuga, magnam sunt optio numquam qui labore distinctio accusamus.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' =>  'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam ea enim nihil fugit itaque iste esse sequi ratione harum rerum praesentium,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam ea enim nihil fugit itaque iste esse sequi ratione harum rerum praesentium, numquam maxime impedit reprehenderit, omnis temporibus adipisci nulla consequuntur in natus. Odio modi blanditiis beatae itaque ea ipsum minima explicabo natus doloremque nesciunt mollitia voluptatibus, numquam dignissimos error, aut totam, rerum illo facilis accusantium nam repellat nemo repellendus nihil. Molestiae cum vero totam dolorum quod a dolorem eligendi eaque! Animi dicta, debitis omnis exercitationem sint aliquid et, officiis sequi odit incidunt necessitatibus repellat voluptatibus? Facere obcaecati inventore officia perferendis recusandae fuga, magnam sunt optio numquam qui labore distinctio accusamus.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' =>  'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam ea enim nihil fugit itaque iste esse sequi ratione harum rerum praesentium,',
        //     'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam ea enim nihil fugit itaque iste esse sequi ratione harum rerum praesentium, numquam maxime impedit reprehenderit, omnis temporibus adipisci nulla consequuntur in natus. Odio modi blanditiis beatae itaque ea ipsum minima explicabo natus doloremque nesciunt mollitia voluptatibus, numquam dignissimos error, aut totam, rerum illo facilis accusantium nam repellat nemo repellendus nihil. Molestiae cum vero totam dolorum quod a dolorem eligendi eaque! Animi dicta, debitis omnis exercitationem sint aliquid et, officiis sequi odit incidunt necessitatibus repellat voluptatibus? Facere obcaecati inventore officia perferendis recusandae fuga, magnam sunt optio numquam qui labore distinctio accusamus.',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);

    }
}
