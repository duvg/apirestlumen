<?php

declare(strict_types=1);

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\Services\Author\StoreAuthorService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class StoreAuthorController extends Controller
{

	private StoreAuthorService $authorService;

	public function __construct(StoreAuthorService $authorService)
	{
		$this->authorService = $authorService;
	}

	/**
	 * Creates an instance of author
	 * @return Illuminate\Http\Response
	 */
	public function store(Request $request): Response
	{
		return $this->authorService->store($request->all());
	}
}