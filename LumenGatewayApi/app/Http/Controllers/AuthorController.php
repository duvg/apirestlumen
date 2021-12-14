<?php

declare(strict_types=1):

namespace App\Http\Controllers;

use App\Services\AuthorService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class AuthorController extends Controller
{
    use ApiResponser;


    /**
     * Service to consume the author service
     * @var AuthorService $authorService
     */
    public $authorService;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AuthorService $authorService)
    {
        $this->authorService = $authorService;
    }

    /**
     * Retrieve all authors resources
     * @return Illuminate\Http\Response
     */
    public function index(): Response
    {

    }

    /**
     * Create an instance of author
     * @return Illuminate\Http\Response
     */
    public function store(Request $request): Response
    {

    }

    /**
     * Retrieve an instance of author
     * @return Illuminate\Http\Response
     */
    public function get(string $author): Response
    {

    }


    /**
     * Update an instace of author
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, string $author): Response
    {

    }

    /**
     * Remove an instance of author
     * @return Illuminate\Http\Response
     */
    public function delete(string $author): Response
    {

    }



    
}
