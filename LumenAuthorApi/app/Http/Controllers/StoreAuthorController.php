<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthorRequest;
use App\Http\Services\AuthorCreateService;
use App\Traits\ApiResponser;
use App\Exceptions\Author\AuthorNotFoundException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Author;
use Illuminate\Http\Response;

class AuthorController extends Controller
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
        //
        $this->authorCreateService = $authorCreateService;
    }


    public function index(): JsonResponse
    {
        $authors = Author::all();
        return $this->successResponse($authors);
    }


    /**
     * @param Request $request
     * @return JsonResponse
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(StoreAuthorRequest $request): JsonResponse
    {
        return $this->authorCreateService->create($request->all());
    }


    /**
     * @param $author
     * @return JsonResponse
     */
    public function show($author): JsonResponse
    {
        try {
            $author = Author::findOrFail($author);
            return $this->successResponse($author);

        } catch (ModelNotFoundException $e) {

            throw AuthorNotFoundException::fromId($author);
        }
    }

    /**
     * Update an author
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $author)
    {
        $rules = [
            'name' => 'max:255',
            'gender' => 'max:255|in:male,female',
            'country' => 'max:255',
        ];

        $this->validate($request, $rules);

        $author = Author::findOrFail($author);

        $author->fill($request->all());

        if ($author->isClean()) {
            return $this->errorResponse('At least one value must change', Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $author->save();

        return $this->successResponse($author);
    }


    /**
     * Remoeve an existing author
     * @return Illuminate\Http\Response
     */
    public function destroy($author)
    {
        $author = Author::findOrFail($author);

        $author->delete();

        return $this->successResponse($author);
    }
}
