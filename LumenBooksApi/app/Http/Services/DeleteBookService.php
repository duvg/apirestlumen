<?php

declare(strict_types=1);

namespace App\Http\Services;

use App\Models\Book;
use App\Traits\ApiResponser;
use Illuminate\Http\JsonResponse;

class DeleteBookService
{
    use ApiResponser;

    public function delete(string $book): JsonResponse
    {
        $book = Book::findOrFail($book);

        $book->delete();

        return $this->successResponse($book);
    }
}
