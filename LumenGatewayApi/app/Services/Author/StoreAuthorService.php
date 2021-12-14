<?php

declare(strict_types=1);

namespace App\Services\Author;

use App\Services\Author\AuthorService;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;



class StoreAuthorService extends AuthorService
{

	use ApiResponser;

	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Create a instance of author
	 * @param  array  $data
	 * @return Illuminate\Http\Response
	 */
	public function store(array $data): Response
	{
		return $this->successResponse($this->performRequest('POST', '/authors', $data), Response::HTTP_CREATED);
	}
}