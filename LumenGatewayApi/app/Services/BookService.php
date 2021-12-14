<?php

declare(strict_types=1);

namespace App\Services;

use App\Traits\ConsumesExternalResponses;

abstract class BookService
{
	use ConsumesExternalResponses;

	/**
	 * The base uri to use for consume the authors service
	 * @var string $baseUri
	 */
	public string $baseUri;

	public function __construct()
	{
		$this->baseUri = config('services.books.base_uri');
	}
}