<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class PdfGeneratorController extends Controller
{
    public function index() {
        return response()->json(User::all());
    }
}
