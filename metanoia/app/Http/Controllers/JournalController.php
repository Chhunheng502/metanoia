<?php

namespace App\Http\Controllers;

use App\Models\Journal;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    public function index()
    {
        $journals = Journal::all();

        return view('pages.journal.index', [
            'journals' => $journals
        ]);
    }

    public function store(Request $request)
    {
        if (Journal::find($request->id)->exists()) {
            Journal::find($request->id)->update($request->all());
        } else {
            Journal::create($request->all());
        }
    }
}
