<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Post;
use Conner\Tagging\Model\Tag;

Route::get('/', function () {

    $tag1 = Tag::find(1);
    $tag2 = Tag::find(2);

    $tag1->setGroup('Backend');
    $tag2->setGroup('Backend');




});


