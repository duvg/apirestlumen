<?php

declare(strict_types=1);

namespace App\Services\Author;

use App\Services\Author\AuthorService;
use App\Traits\ApiResponser;
use Illuminate\Http\Response;

class GetAuthorService extends AuthorService
{
	use ApiResponser;

	public function __construct()
	{
		parent::__construct();
	}

	public function getAuthor(string $author): Response
	{
		return $this->successResponse($this->performRequest('GET', "/authors/{$author}"));
	}


}