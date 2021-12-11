<?php

declare(strict_types=1);

namespace App\Http\Services;

use App\Models\Book;
use App\Traits\ApiResponser;
use Illuminate\Http\JsonResponse;

class GetBookService
{
    use ApiResponser;

    public function getBook(string $book): JsonResponse
    {
        $book = Book::findOrFail($book);
        return $this->successResponse($book);
    }
}
