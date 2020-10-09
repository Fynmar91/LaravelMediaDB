<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class MediaController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $media = \App\Models\Media::all();

        return view('media.index', [
            'user' => Auth::user(),
            'media' => $media,
        ]);
    }

    public function create()
    {
        return view('media.create');
    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required',
            'type' => 'required',
        ]);

        dd($data);
    }
}