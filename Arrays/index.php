<?php

class post
{
    public $title;
    
    public $published;

    public $author;

    public function __construct($title, $author, $published)
    {
        $this->title = $title;
        $this->author = $author;
        $this->published = $published;
    }
}

$posts = [
    new Post('My First Post', 'KS', true),
    new Post('My Second Post', 'HD', true),
    new Post('My Third Post', 'LS', true),
    new Post('My Fourth Post', 'GR', false),
    new Post('My Fifth Post', 'BR', true),
    new Post('My Sixth Post', 'VT', false),
];

//to filter out an unpublished posts(false)
// $unpublishedPosts = array_filter($posts, function ($post) {
//     return ! $post->published;
// });

//to filter out published posts(true)
// $publishedPosts = array_filter($posts, function ($post) {
//     return $post->published;
// });

//this is the reverse of the above which runs the callback before the array i.e. (callback, array)
// $modified = array_map(function ($post) {
//     $post->published = true;
//     return $post;
// }, $posts);

        //  or  

// $modified = array_map(function ($post) {
//     return (array) $post;
// }, $posts);

//the array_map above is similiar to this foreach loop
// foreach ($posts as $post) {
//     $post->published = true;
// };

$titles = array_column($posts, 'author', 'title');
var_dump($titles);