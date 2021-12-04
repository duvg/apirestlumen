<?php

declare(strict_types=1);

namespace App\Http\Services;

use App\Models\Author;
use App\Traits\ApiResponser;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthorCreateService
{
    use ApiResponser;
    /**
     * @var Request
     */
    private Request $request;

    public function create(array $data): JsonResponse
    {
        $author = Author::create($data);
        return $this->successResponse($author);
    }
}
