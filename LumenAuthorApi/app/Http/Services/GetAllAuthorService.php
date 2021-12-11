<?php

declare(strict_types=1);

namespace App\Http\Services;

use App\Models\Author;
use App\Traits\ApiResponser;
use Illuminate\Http\JsonResponse;

class GetAllAuthorService
{
    use ApiResponser;

    public function getAll(): JsonResponse
    {
        $author = Author::all();

        return $this->successResponse($author);
    }
}
