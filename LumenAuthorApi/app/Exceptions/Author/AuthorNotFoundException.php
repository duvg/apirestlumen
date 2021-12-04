<?php

declare(strict_types=1);
namespace App\Exceptions\Author;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AuthorNotFoundException extends NotFoundHttpException
{
    public static function fromId(string $id): self
    {
        throw new self(sprintf('Author with id %s not found', $id));
    }
}
