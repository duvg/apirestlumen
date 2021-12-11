<?php

declare(strict_types=1);

namespace App\Http\Services;

use App\Models\Author;
use App\Traits\ApiResponser;
use Illuminate\Http\JsonResponse;

class DeleteAuthorService
{
    use ApiResponser;

    public function delete(string $id): JsonResponse
    {
        $author = Author::findOrFail($id);

        $author->delete();

        return $this->successResponse($author);
    }

}
