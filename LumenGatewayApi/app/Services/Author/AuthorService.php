<?php

declare(strict_types=1);

namespace App\Services\Author;

use App\Traits\ConsumesExternalService;

class AuthorService
{
	use ConsumesExternalService;

	/**
	 * The base uri to use for consume the authors service
	 * @var string $baseUri
	 */
	public string $baseUri;

	public function __construct()
	{
		$this->baseUri = config('services.authors.base_url');
	}
}