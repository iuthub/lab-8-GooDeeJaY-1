<?php

namespace App\Http\Controllers;

use App\Post;
//use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Session\Store;

class PostController extends Controller {
    public function getIndex() {
        $post = resolve('App\Post');
    }
    //
}
