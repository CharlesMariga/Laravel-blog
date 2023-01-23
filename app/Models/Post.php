<?php

namespace App\Models;

use Illuminate\Support\Facades\File;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Post
{
    use HasFactory;

    public static function find($slug)
    {
        $path = resource_path("posts/{$slug}.html");

        if (!file_exists($path)) {
            throw new ModelNotFoundException();
        }

        return cache()->remember("posts.{$slug}", 1200, fn () => file_get_contents($path));
    }

    public static function all()
    {
        $files = File::files(resource_path('posts/'));
        return array_map(fn ($file) => $file->getContents(), $files);
    }
}
