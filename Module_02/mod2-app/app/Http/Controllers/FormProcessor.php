<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class FormProcessor extends Controller
{
    //
    /**
     * @return View
     */
    public function index(): View
    {
        return view('form');
    }

    /**
     * @param Request $request
     * @return View
     */
    public function store(Request $request): View
    {
        $data = [
            'name' => $request->input('name'),
            'last_name' => $request->input('last_name'),
            'email' => $request->input('email'),
        ];

//        return response()->json($data);
        return view('greeting', ['data' => $data]);
    }
}
