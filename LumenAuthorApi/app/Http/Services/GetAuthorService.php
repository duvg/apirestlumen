<?php

declare(strict_types=1);

namespace App\Http\Services;

use App\Models\Author;
use App\Traits\ApiResponser;
use Illuminate\Http\JsonResponse;

class GetAuthorService
{
    use ApiResponser;

    public function getAuthorById(string $id): JsonResponse
    {
        $author = Author::findOrFail($id);


        return $this->successResponse($author);
    }
}
