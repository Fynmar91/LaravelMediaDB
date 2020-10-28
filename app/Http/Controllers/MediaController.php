<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Null_;

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
        $tags = \App\Models\Tag::all();

        return view('media.create', [
            'tags' => $tags,
        ]);
    }

    public function store()
    {
        $k = "value";
        $requestTags = request()->all()["tags"]; 
        $data = request()->validate([
            'title' => 'required',
            'subtitle' => '',
            'status' => '',
        ]);

        $media = \App\Models\Media::create($data);

        foreach ($requestTags as $value) {

            $key = strtolower(json_decode($value)->$k);
            $existingTag = \App\Models\Tag::where('name', $key)->first();

            if (!is_null($existingTag)) {
                $media->tags()->attach($existingTag->id);
            }
            else {
                $newTag = \App\Models\Tag::create(['name' => $key]);
                $media->tags()->attach($newTag->id);
            }
        }

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