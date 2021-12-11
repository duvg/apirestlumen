<?php

declare(strict_types=1);

namespace App\Http\Services;

use App\Models\Book;
use App\Traits\ApiResponser;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class UpdateBookService
{
    use ApiResponser;

    public function udpate(array $data, string $book): JsonResponse
    {
        $book = Book::findOrFail($book);

        $book->fill($data);

        if ($book->isClean()) {
            return $this->errorResponse(
                'Al least one value must change',
                Response::HTTP_UNPROCESSABLE_ENTITY
            );
        }

        $book->save();

        return $this->successResponse($book);
    }
}
