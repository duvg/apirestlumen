<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UpdateBookRequest extends Controller
{
    /**
     * @var Request
     */
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;

        $this->validate(
            $this->request,
            [
                'title' => 'min:10|max:255',
                'description' => 'min:10|max:255',
                'price' => 'min:1',
                'author_id' => 'min:1'
            ]
        );
    }

    public  function all(): array
    {
        return $this->request->all();
    }
}
