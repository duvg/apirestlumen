<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\UpdateBookRequest;
use App\Http\Services\UpdateBookService;
use Illuminate\Http\JsonResponse;

class UpdateBookController extends Controller
{
    /**
     * @var UpdateBookService
     */
    private $bookService;

    public function __construct(UpdateBookService $bookService)
    {
        $this->bookService = $bookService;
    }

    public  function update(UpdateBookRequest $request, string $book): JsonResponse
    {
        return $this->bookService->udpate($request->all(), $book);
    }
}
