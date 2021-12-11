<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\UpdateAuthorRequest;
use App\Http\Services\UpdateAuthorService;
use Illuminate\Http\JsonResponse;

class UpdateAuthorController extends Controller
{
    private UpdateAuthorService $authorService;

    public function __construct(UpdateAuthorService $authorService)
    {
        $this->authorService = $authorService;
    }

    public function update(UpdateAuthorRequest $request, $author): JsonResponse
    {
        return $this->authorService->update($request->all(), $author);
    }
}
