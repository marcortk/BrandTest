<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Speaker;

class SpeakerController extends Controller
{
    public function index() 
    {

    }

    public function create()
    {
        $tags = Tag::orderBy('name', 'ASC')->get();
        $categories = Category::orderBy('name', 'ASC')->get();
        $data = [
            'tags' => $tags,
            'categories' => $categories
        ];
        return view('backend.speakers.create', $data);
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'name' => 'max:255|required',
            'about' => 'required',
            'biography' => 'required'
        ]);

        $speaker = Speaker::create([
            'name' => $request->name,
            'about' => $request->about,
            'biography' => $request->biography
        ]);

        $tags = explode(",", $request->tags);
        $categories = explode(",", $request->categories);
        $tags_ids = array_map(function ($tag) {
            return Tag::firstOrCreate(['name' => $tag])->id;
        }, $tags);
        $categories_ids = array_map(function ($category) {
            return Category::firstOrCreate(['name' => $category])->id;
        }, $categories);
        $speaker->categories()->sync($categories_ids);
        $speaker->tags()->sync($tags_ids);

        echo 'done';
    }
}
