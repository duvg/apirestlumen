<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Services\GetBookService;
use Illuminate\Http\JsonResponse;

class GetBookController extends Controller
{
    /**
     * @var GetBookService
     */
    private $bookService;

    public function __construct(GetBookService $bookService)
    {
        $this->bookService = $bookService;
    }

    public function getBook(string $book): JsonResponse
    {
        return $this->bookService->getBook($book);
    }
}
