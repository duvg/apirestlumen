<?php

declare(strict_types=1);

namespace App\Services\Author;

use App\Services\Author\AuthorService;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;


class GetAllAuthorService extends AuthorService
{

	use ApiResponser;

	public function __cosntruct()
	{
		parent::contruct();
	}

	public function getAllAuthors(): Response
	{
		return $this->successResponse($this->performRequest('GET', '/authors'));
	}
}
