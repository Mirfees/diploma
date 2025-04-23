<?php

namespace App\Http\Controllers\ArchObject;

use App\Http\Controllers\Controller;
use App\Services\ArchObject\Service;

class BaseController extends Controller
{
    public $service;

    public function __construct(Service $service) {
        $this->service = $service;
    }
}
