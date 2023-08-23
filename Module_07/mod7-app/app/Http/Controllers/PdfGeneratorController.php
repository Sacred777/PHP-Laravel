<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\Response;
use PDF;


class PdfGeneratorController extends Controller
{
    /**
     * @param int $id
     * @return Response
     */
    public function index(int $id): Response
    {
        $dataUser = User::find($id);

        if (!$dataUser) {
            abort(404);
        }

        $pdf = PDF::loadView('resume', ["data" => $dataUser]);
        return $pdf->stream('resume.pdf');
    }
}
