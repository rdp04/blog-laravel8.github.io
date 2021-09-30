<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

// class Post extends Model
// {
//     use HasFactory;
// }

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Rian Dwi",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum aut in autem perferendis cupiditate totam sit. Odio sequi illum, consequuntur nam iste sint vero beatae autem quibusdam officiis eum dolore nobis unde vel, dolorem explicabo minima? Soluta nobis error dolor impedit facere voluptatum qui deserunt accusamus. Voluptas eligendi ut error cupiditate voluptatibus modi? Voluptatem ducimus rerum in tempore dignissimos, placeat temporibus beatae maxime laboriosam alias dolorem dolor animi voluptas maiores perspiciatis molestiae, magni, quasi quod eaque labore ipsum quaerat! Beatae!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Prasetio",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum aut in autem perferendis cupiditate totam sit. Odio sequi illum, consequuntur nam iste sint vero beatae autem quibusdam officiis eum dolore nobis unde vel, dolorem explicabo minima? Soluta nobis error dolor impedit facere voluptatum qui deserunt accusamus. Voluptas eligendi ut error cupiditate voluptatibus modi? Voluptatem ducimus rerum in tempore dignissimos, placeat temporibus beatae maxime laboriosam alias dolorem dolor animi voluptas maiores perspiciatis molestiae, magni, quasi quod eaque labore ipsum quaerat! Beatae!, rerum in tempore dignissimos, placeat temporibus beatae maxime laboriosam alias dolorem dolor animi voluptas maiores perspiciatis molestiae, magni, quasi quod eaque labore ipsum quaerat! Beatae!"
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }
    
    public static function find($slug)
    {
        $posts = static::all();
        // $post = [];
        // foreach($posts as $p){
        //     if($p["slug"] === $slug){
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug );
    }
    
}