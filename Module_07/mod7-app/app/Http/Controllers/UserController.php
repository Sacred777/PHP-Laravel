<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return view('user');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => ['required', 'max:50'],
            'surname' => ['required', 'max:50'],
//            TODO нужно записать регулярное выражение на проверку email
            'email' => ['required'],
            ]);

//        $user = new User($request->all()); 'regex:/^[A-Z0-9._%+-]+@[A-Z0-9-]+.+.[A-Z]{2,4}$/i'
        return User::create($request->all());
    }

    public function get($id) {
        $dataUser = User::where('id', $id)
            ->get();
        return response()->json(count($dataUser) > 0 ? $dataUser : 'User not found');
    }

}
