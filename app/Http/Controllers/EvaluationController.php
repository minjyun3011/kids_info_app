<?php

namespace App\Http\Controllers;

use App\Models\Evaluation;
use Illuminate\Http\Request;

class EvaluationController extends Controller
{
    public function index()
    {

        $evas = Evaluation::all();
        // memosディレクトリーの中のindexページを指定し、memosの連想配列を代入
        return view('evaluations.index', ['evas' => $evas]);
    }
    public function show($id)
    {
        $eva = Evaluation::find($id);
        return view('evaluations.show', ['eva' => $eva]);
    }
}
