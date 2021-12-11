<?php

declare(strict_types=1);

namespace App\Http\Services;

use App\Models\Book;
use App\Traits\ApiResponser;
use Illuminate\Http\JsonResponse;

class GetAllBookService
{
    use ApiResponser;

    public  function getAll(): JsonResponse
    {
        $books = Book::all();
        return $this->successResponse($books);
    }
}
