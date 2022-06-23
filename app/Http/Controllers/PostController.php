<?php namespace App\Http\Controllers;

use App\Models\Post;
use App\Http\Services\PostService;
use SamagTech\CoreLumen\Contracts\Service;
use SamagTech\CoreLumen\Core\BaseController;

class PostController extends BaseController {


    protected string $model = Post::class;

    protected string $defaultService = PostService::class;

    protected Service $service;


}