<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Facades\SEOMeta;

class BlogController extends Controller
{
    public function blog()
    {
        $title = "This is a blog title";
        $description ="This is a discription of my blog post";

        SEOMeta::setTitle($title);
        SEOMeta::setDescription('This is my page description');

        $data = [
            'title' => $title,
            'description' => $description,
        ];
        return view('blog',$data);
    }
}
