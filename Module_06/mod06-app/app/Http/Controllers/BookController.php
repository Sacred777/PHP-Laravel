<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Psy\Util\Json;

class BookController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('form');
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function store(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'title' => ['required', 'unique:App\Models\Book', 'max:255', 'regex:/^\S+$/'],
            'author' => ['required', 'max:100', 'regex:/^\S+$/'],
            'genre' => ['required', 'regex:/^\S+$/'],
        ]);

        $book = new Book($request->all());
        $book->save();

        return response()->json('Book is successfully validated and data hes been saved');
    }
}
