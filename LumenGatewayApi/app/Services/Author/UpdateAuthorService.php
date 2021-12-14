<?php

declare(strict_types=1);

namespace App\Services\Author;

use App\Services\Author\AuthorService;
use App\Traits\ApiResponser;
use Illuminate\Http\Response;

class UpdateAuthorService extends AuthorService
{
	use ApiResponser;

	public function __construct()
	{
		parent::__construct();
	}

	public function update(array $data, string $author): Response
	{
		return $this->successResponse($this->performRequest('PUT', "/authors/$author", $data));
	}
}