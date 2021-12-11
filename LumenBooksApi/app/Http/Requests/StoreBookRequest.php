<?php

declare(strict_types=1);

namespace App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreBookRequest extends Controller
{
    /**
     * @var Request
     */
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->validate(
            $request,
            [
                'title' => 'required|min:10|max:100',
                'description' => 'required|min:10|max:255',
                'price' => 'required|min:1|max:10',
                'author_id' => 'required|min:1'
            ]
        );
    }

    public function all()
    {
        return $this->request->all();
    }
}
