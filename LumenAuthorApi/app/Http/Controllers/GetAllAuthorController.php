<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Services\GetAllAuthorService;
use Illuminate\Http\JsonResponse;

class GetAllAuthorController extends Controller
{

    private GetAllAuthorService $allAuthorService;

    public  function __construct(GetAllAuthorService $allAuthorService)
    {
        $this->allAuthorService = $allAuthorService;
    }

    public function getAll(): JsonResponse
    {
        return $this->allAuthorService->getAll();
    }
}
