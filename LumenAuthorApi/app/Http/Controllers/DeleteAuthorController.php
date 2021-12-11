<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Services\DeleteAuthorService;
use App\Http\Services\GetAuthorService;
use Illuminate\Http\JsonResponse;

class DeleteAuthorController extends Controller
{
    private DeleteAuthorService $authorService;

    public function __construct(DeleteAuthorService $authorService)
    {
        $this->authorService = $authorService;
    }

    public function delete(string $author): JsonResponse
    {
        return $this->authorService->delete($author);
    }
}
