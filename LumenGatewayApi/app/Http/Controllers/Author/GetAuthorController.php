<?php

declare(strict_types=1);

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\Services\Author\GetAuthorService;
use Illuminate\Http\Response;

class GetAuthorController extends Controller
{
	private GetAuthorService $authorService;

	public function __construct(GetAuthorService $authorService)
	{
		$this->authorService = $authorService;
	}

	public function get(string $author): Response
	{
		return $this->authorService->getAuthor($author);
	}

}