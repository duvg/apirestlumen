<?php

declare(strict_types=1);

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\Services\Author\DeleteAuthorService;
use Illuminate\Http\Response;

class DeleteAuthorController extends Controller
{
	private DeleteAuthorService $authorService;

	public function __construct(DeleteAuthorService $authorService)
	{
		$this->authorService = $authorService;
	}

	public function delete(string $author): Response
	{
		return $this->authorService->delete($author);
	}

}