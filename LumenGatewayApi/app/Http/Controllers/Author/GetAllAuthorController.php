<?php

declare(strict_types=1);

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use App\Services\Author\GetAllAuthorService;

class GetAllAuthorController extends Controller
{

	public GetAllAuthorService $authorService;

	public function __construct(GetAllAuthorService $authorService)
	{
		$this->authorService = $authorService;
	} 

	public function getAll(): Response
	{
		return $this->authorService->getAllAuthors();
	}
}