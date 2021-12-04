<?php

declare(strict_types=1);

namespace App\Http\Requests;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class StoreAuthorRequest extends Controller
{
    private Request $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->validate(
            $request, [
                'name' => 'required|max:255',
                'gender' => 'required|max:255|in:male,female',
                'country' => 'required|max:255'
            ]
        );
    }

    public function all() {
        return $this->request->all();
    }
}
