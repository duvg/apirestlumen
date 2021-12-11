<?php

declare(strict_types=1);

namespace App\Http\Services;

use App\Http\Requests\UpdateAuthorRequest;
use App\Models\Author;
use App\Traits\ApiResponser;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class UpdateAuthorService
{
    use ApiResponser;

    public function update(array $data, string $author): JsonResponse
    {
        $author = Author::findOrFail($author);

        $author->fill($data);

        if($author->isClean()) {
            return $this->errorResponse(
                'At least one value must change',
                Response::HTTP_UNPROCESSABLE_ENTITY
            );
        }

        $author->save();

        return $this->successResponse($author);
    }
}
