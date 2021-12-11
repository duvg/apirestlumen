<?php

declare(strict_types=1);

namespace App\Http\Services;

use App\Models\Book;
use App\Traits\ApiResponser;
use Illuminate\Http\JsonResponse;

class StoreBookService
{
    use ApiResponser;

    /**
     * @param array $data
     * @return JsonResponse
     */
    public function storeBook(array $data): JsonResponse
    {
        $book = Book::create($data);
        return $this->successResponse($book);
    }
}
