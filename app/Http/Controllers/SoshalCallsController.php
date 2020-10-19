<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SoshalCall;

class SoshalCallsController extends Controller
{
    public function index()
    {
        return view('soshals.index', ['soshalCalls' => auth()->user()->timeline()]);
    }

    public function store()
    {
        $items = request()->validate([
            'body' => 'required|max:2000'
        ]);

        SoshalCall::create([
            'user_id' => auth()->user()->id,
            'body' => $items['body']
        ]);

        return redirect()->route('home');
    }
}
