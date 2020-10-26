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
            'subtitle' => '',
        ]);

        $media = \App\Models\Media::create($data);
        $tag = \App\Models\Tag::findOrFail(1);
        $media->tags()->attach($tag->id);
        return redirect()->route('index');
    }

    public function show($m)
    {
        $media = \App\Models\Media::findOrFail($m);
        $tags = $media->tags;

        return view('media.show', [
            'media' => $media,
            'tags' => $tags,
        ]);
    }

    public function destroy($m)
    {
        \App\Models\Media::destroy($m);
        return redirect()->route('index');
    }
}