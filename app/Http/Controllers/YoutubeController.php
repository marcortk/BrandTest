<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YoutubeController extends Controller
{
    public function search()
    {
        $youtube = new \Madcoda\Youtube(['key' => 'AIzaSyBVF0ePQtIBV7eWtrAm5igClldEF-w3J_Y']);

        $params = [
            'q' => 'jimmy page',
            'type' => 'video',
            'part' => 'id, snippet',
            'maxResults' => 4
        ];

        $videos = $youtube->searchAdvanced($params, true);
        //dd($videos['results']);
        return view('pages.videos')->with('videos', $videos['results']);
    }
}
