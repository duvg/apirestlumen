<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class UpdateAuthorRequest extends Controller
{
    private Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;

        $this->validate(
            $request,
            [
                'name' => 'max:255',
                'gender' => 'max:255',
                'country' => 'max:255'
            ]
        );

    }

    public function all()
    {
        return $this->request->all();
    }
}
