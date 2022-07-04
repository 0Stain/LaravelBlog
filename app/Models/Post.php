<?php


namespace App\Models;


class Post
{
    public static function find($slug)
    {




        if (! file_exists($path = __DIR__ . "/../resources/posts/{$slug}.html")) {
            abort(404);
        }


        return cache()->remember("posts.{$slug}", 5, fn() => file_get_contents($path));

    }
}
