<?php

namespace App\Http\Controllers;

use App\Http\Services\GetAllBookService;

class GetAllBookController extends Controller
{
    /**
     * @var GetAllBookService
     */
    private $bookService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(GetAllBookService $bookService)
    {
        $this->bookService = $bookService;
    }

    public function getAll()
    {
        return $this->bookService->getAll();
    }
}
