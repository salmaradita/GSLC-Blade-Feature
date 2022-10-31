<?php

namespace App\Models;


class Post
{
   private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "Judul-post-pertama",
            "author" => "Fisalma",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi illum laborum fuga iure, omnis deleniti similique, odio explicabo libero sapiente saepe quasi recusandae, rem magni? Aspernatur nostrum fuga laborum in rerum, minima atque blanditiis optio reprehenderit perspiciatis reiciendis voluptatibus alias autem ab earum illum minus sunt neque, ea ex. Officia!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "Judul-post-kedua",
            "author" => "Salma",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque laboriosam impedit laborum delectus quos dolore reprehenderit quibusdam recusandae minus dicta ab voluptatem temporibus beatae est, quod obcaecati pariatur dolorum totam cupiditate. Cum omnis, quos quae, voluptatem illo explicabo odit voluptatibus consectetur quis, ut assumenda reiciendis. Magnam culpa architecto nostrum? Temporibus odio corporis natus labore vero praesentium tempora, cum a voluptatibus sapiente at, quae eius voluptatem quisquam minima alias esse dolore nisi iusto optio corrupti ut autem voluptate ea. Sapiente, excepturi!"
        ],
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }


}
