<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Http\Services\StoreBookService;
use Illuminate\Http\JsonResponse;

class StoreBookController
{
    /**
     * @var StoreBookService
     */
    private $bookService;

    public function __construct(StoreBookService $bookService)
    {
        $this->bookService = $bookService;
    }

    public function store(StoreBookRequest $request): JsonResponse
    {
        return $this->bookService->storeBook($request->all());
    }
}
