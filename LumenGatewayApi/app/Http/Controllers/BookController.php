<?php

declare(strict_types=1):

namespace App\Http\Controllers;

use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class BookController extends Controller
{
    use ApiResponser;


    /**
     * Service to consume the book service
     * @var BookService $bookService
     */
    public $bookService;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    /**
     * Retrieve all books resources
     * @return Illuminate\Http\Response
     */
    public function index(): Response
    {

    }

    /**
     * Create an instance of book
     * @return Illuminate\Http\Response
     */
    public function store(Request $request): Response
    {

    }

    /**
     * Retrieve an instance of book
     * @return Illuminate\Http\Response
     */
    public function get(string $book): Response
    {

    }


    /**
     * Update an instace of book
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, string $book): Response
    {

    }

    /**
     * Remove an instance of book
     */
    public function delete(string $book): Response
    {

    }



    
}
