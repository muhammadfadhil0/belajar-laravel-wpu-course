<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Termwind\Components\Dd;
use Illuminate\Support\Arr;

//root

//kalau get di dalam "/" berarti mengakses dari url browser
//maksud view itu adalah file yang ada di dalam folder resources/views

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['title' => 'About Page']);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact Page']);
});

Route::get('/posts', function () {

    $posts = [
        [
            'id' => '1',
            'title' => 'Apa bahaya merokok?',
            'author' => 'Muhammad Fadhil',
            'body' => ' Merokok adalah kebiasaan yang mengakar di masyarakat global, sering kali dimulai sebagai bentuk rekreasi atau tekanan sosial. Namun, di balik setiap kepulan asap tersimpan ancaman serius yang secara perlahan namun pasti merusak kesehatan penggunanya, bahkan orang-orang di sekitarnya. Mengenali bahaya ini adalah langkah pertama untuk melindungi diri dan orang-orang terkasih dari dampak buruknya.'
        ],
        [
            'id' => '2',
            'title' => 'belajar koding sejak dini',
            'author' => 'azzura q',
            'body' => ' Di era digital yang terus berkembang pesat, kemampuan koding atau pemrograman bukan lagi sekadar keahlian niche. Ia telah menjadi literasi fundamental, layaknya membaca dan menulis, yang membuka gerbang ke berbagai peluang di masa depan. Memperkenalkan dunia koding kepada anak sejak dini bukan hanya tentang menciptakan programer andal, melainkan juga membekali mereka dengan keterampilan berpikir kritis, logis,'
        ]
    ];

    return view('posts', ['title' => 'Blog Page', 'posts' => $posts]);
});

Route::get('/posts/{id}', function ($id) {

    $posts = [
        [
            'id' => '1',
            'title' => 'Apa bahaya merokok?',
            'author' => 'Muhammad Fadhil',
            'body' => ' Merokok adalah kebiasaan yang mengakar di masyarakat global, sering kali dimulai sebagai bentuk rekreasi atau tekanan sosial. Namun, di balik setiap kepulan asap tersimpan ancaman serius yang secara perlahan namun pasti merusak kesehatan penggunanya, bahkan orang-orang di sekitarnya. Mengenali bahaya ini adalah langkah pertama untuk melindungi diri dan orang-orang terkasih dari dampak buruknya.'
        ],
        [
            'id' => '2',
            'title' => 'belajar koding sejak dini',
            'author' => 'azzura q',
            'body' => ' Di era digital yang terus berkembang pesat, kemampuan koding atau pemrograman bukan lagi sekadar keahlian niche. Ia telah menjadi literasi fundamental, layaknya membaca dan menulis, yang membuka gerbang ke berbagai peluang di masa depan. Memperkenalkan dunia koding kepada anak sejak dini bukan hanya tentang menciptakan programer andal, melainkan juga membekali mereka dengan keterampilan berpikir kritis, logis,'
        ]
    ];


    $post = Arr::first($posts, function ($post) use ($id) {
        return $post['id'] == $id;
    });

    if (!$post) abort(404, 'Post not found');


    return view('post', ['title' => 'artikel', 'post' => $post]);
});
