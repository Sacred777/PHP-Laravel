<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{

    /**
     * @return View
     */
    public function index(): View
    {
        return view('user');
    }


    public function store(Request $request): User
    {
        $request->validate([
            'name' => ['required', 'max:50'],
            'surname' => ['required', 'max:50'],
//Оствил регулярку, по заданию, хотя стоило бы делать проверку так
//            'email' => ['required', 'email'],
            'email' => ['required', 'regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/'],
        ]);
        return User::create($request->all());
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function get(int $id): JsonResponse
    {
        $dataUser = User::find($id);
        if (!$dataUser) {
            return response()->json(['error' => 'User not found'], 400);
        }

        return response()->json($dataUser);
    }

}
