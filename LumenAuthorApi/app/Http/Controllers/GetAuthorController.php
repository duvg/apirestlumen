<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Services\GetAuthorService;
use Illuminate\Http\JsonResponse;

class GetAuthorController extends Controller
{

    private GetAuthorService $authorService;

    public function __construct(GetAuthorService $authorService)
    {
        $this->authorService = $authorService;
    }

    public function get(string $author): JsonResponse
    {
        return $this->authorService->getAuthorById($author);
    }
}
