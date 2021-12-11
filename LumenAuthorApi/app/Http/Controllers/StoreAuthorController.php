<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthorRequest;
use App\Http\Services\AuthorCreateService;
use App\Traits\ApiResponser;
use Illuminate\Http\JsonResponse;


class StoreAuthorController extends Controller
{

    use ApiResponser;

    private AuthorCreateService $authorCreateService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(AuthorCreateService $authorCreateService)
    {
        $this->authorCreateService = $authorCreateService;
    }

    /**
     * @param StoreAuthorRequest $request
     * @return JsonResponse
     */
    public function store(StoreAuthorRequest $request): JsonResponse
    {
        return $this->authorCreateService->create($request->all());
    }






}
