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
    public function create()
    {
        return view('evaluations.create');
    }

    public function store(Request $request)
    {
        $eva = new Evaluation;
        $eva->kid_name = $request->kid_name;
        $eva->category = $request->category;
        $eva->title = $request->title;
        $eva->evaluation = $request->evaluation;
        $eva->detail = $request->detail;
        $eva->teacher = $request->teacher;
        $eva->save();
        return redirect(route("evaluations.index"));
    }
    public function edit($id)
    {
        $eva = Evaluation::find($id);
        return view('evaluations.edit', ['eva' => $eva]);
    }
    public function update(Request $request, $id)
    {
        // ここはidで探して持ってくる以外はstoreと同じ
        $eva = Evaluation::find($id);

        // 値の用意
        $eva->kid_name = $request->kid_name;
        $eva->category = $request->category;
        $eva->title = $request->title;
        $eva->evaluation = $request->evaluation;
        $eva->detail = $request->detail;
        $eva->teacher = $request->teacher;

        // 保存
        $eva->save();

        // 登録したらindexに戻る
        return redirect(route("evaluations.index"));
    }
}
