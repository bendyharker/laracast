<?php
use App\Models\Post;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use League\CommonMark\Extension\FrontMatter\Data\SymfonyYamlFrontMatterParser;


//Home Route
Route::get('/', function () {
    $posts = Post::all();
    return view('posts', [
        'posts' => $posts
    ]);
});

//posts Route
Route::get('posts/{post}', function($slug){

    return view('post', [
        'post' =>  Post::findOrFail($slug)
    ]);
});


