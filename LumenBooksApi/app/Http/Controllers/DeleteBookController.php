<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Services\DeleteBookService;
use Illuminate\Http\JsonResponse;

class DeleteBookController extends Controller
{
    /**
     * @var DeleteBookService
     */
    private $bookService;

    public function __construct(DeleteBookService $bookService)
    {
        $this->bookService = $bookService;
    }

    public function delete(string $book): JsonResponse
    {
        return $this->bookService->delete($book);
    }
}
