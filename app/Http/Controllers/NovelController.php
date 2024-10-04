<?php

namespace App\Http\Controllers;

use App\Models\Novel;
use Illuminate\Http\Request;

class NovelController extends Controller
{
    public function index()
    {
        $novels = Novel::all();
        return view("novel.index", compact("novels"));
    }

    public function create()
    {
        return view("novel.create");
    }

    public function show(Novel $novel)
{
    // $novel = Novel::findOrFail($novel);
    return view('novel.show', compact('novel'));
}

    public function store(Request $request)
    {
        $dataNovel = $request->validate([
            "title" => "required|max:255",
            "author" => "required|max:255",
            "sysnopsis" => "nullable",
            "published_at" => "nullable",
        ]);

        // dd($dataNovel);

        $novel = Novel::create($dataNovel);
        return redirect()->route('novel.index');
    }

    public function edit(Novel $novel){
        return view('novel.edit',compact('novel'));
    }

    public function update(Request $request, Novel $novel){
        $dataNovel = $request->validate([
            "title" => "required|max:255",
            "author" => "required|max:255",
            "sysnopsis" => "nullable",
            "published_at" => "nullable",
        ]);
        // dd($dataNovel);
        $novel->update($dataNovel);
        return redirect()->route("novel.index");
    }

    public function destroy(Novel $novel){
        $novel->delete();
        return redirect()->route("novel.index");
    }
}
