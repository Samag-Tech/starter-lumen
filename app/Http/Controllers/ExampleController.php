<?php namespace App\Http\Controllers;

use App\Http\Services\ExampleService;
use SamagTech\CoreLumen\Contracts\Service;
use SamagTech\CoreLumen\Core\BaseController;

class ExampleController extends BaseController {


    protected string $model = Example::class;

    protected string $defaultService = ExampleService::class;

    protected Service $service;


}