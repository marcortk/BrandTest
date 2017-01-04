@extends('layouts.main')

@section('title', 'Videos')

@section('content')
<div class="row">
    @if(isset($videos))
        @foreach($videos as $video)
            <div class="col-sm-6 col-md-6">
                <div class="thumbnail">
                    <!-- Mostrmamos la fotos mediana del video -->
                    <img src="{{$video->snippet->thumbnails->medium->url}}">
                    <div class="caption">
                        <!-- Mostrmamos el titulo del video -->
                        <h3><a href="https://www.youtube.com/watch?v={{$video->id->videoId}}">
                            {{$video->snippet->title}}</a></h3>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
</div>