<?php

declare(strict_types=1);

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\Services\Author\UpdateAuthorService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class UpdateAuthorController extends Controller
{

	private UpdateAuthorService $authorService;

	public function __construct(UpdateAuthorService $authorService)
	{
		$this->authorService = $authorService;
	}

	public function update(Request $request, string $author): Response
	{
		return $this->authorService->update($request->all(), $author);
	}
}