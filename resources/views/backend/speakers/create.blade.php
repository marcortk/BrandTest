@extends('backend.layouts.main')

@section('title', 'Create Speaker')

@section('content')
    <form class="ui form" id="formid" action="{{ route('save') }}" method="POST">
        {{  csrf_field()  }}
        @if (count($errors) > 0)
            <div class="ui negative message">
                <i class="close icon"></i>
                <ul class="list">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="ui top attached tabular menu">
            <a class="active item" data-tab="first">File</a>
            <a class="item" data-tab="second">Link</a>
        </div>
        <div class="ui bottom attached active tab segment" data-tab="first">
            <div class="field">
                <img id="preview_img_file" class="ui small image" src="#">
            </div>
            <div class="field">
                <div class="ui action input">
                    <input type="text" id="input_img">
                    <label for="attachmentName" class="ui icon button btn-file">
                         <i class="photo icon"></i>
                         <input type="file" id="attachmentName" name="attachmentName" style="display: none;">
                    </label>
                </div>
            </div>
        </div>
        <div class="ui bottom attached tab segment" data-tab="second">
            Second
        </div>
        <div class="field">
            <div class="ui sub header">Tags</div>
            <div class="ui fluid multiple search selection dropdown" id="multi-select">
                <a id="main_tag" class="ui label transition hidden_tag" data-value=""></a>
                <input name="tags" type="hidden" id="tag-input">
                <i class="dropdown icon"></i>
                <div class="default text">Skills</div>
                <div class="menu">
                @foreach($tags as $tag)
                    <div class="item" data-value={{ $tag->name }}>{{ $tag->name }}</div>
                @endforeach
                </div>
            </div>
        </div>
        <div class="field">
            <div class="ui sub header">Categories</div>
            <div class="ui fluid multiple search selection dropdown" id="multi-select">
                <input name="categories" type="hidden" id="tag-input">
                <i class="dropdown icon"></i>
                <div class="default text">Skills</div>
                <div class="menu">
                @foreach($categories as $category)
                    <div class="item" data-value={{ $category->name }}>{{ $category->name }}</div>
                @endforeach
                </div>
            </div>
        </div>
        <div class="field">
            <label>First Name</label>
            <input name="name" placeholder="First Name" type="text" id="name">
        </div>
        <div class="field">
            <label>About</label>
            <textarea name="about" rows="2" style="margin-top: 0px; margin-bottom: 0px; height: 58px;"></textarea>
        </div>
        <div class="field">
            <label>Biography</label>
            <textarea name="biography" rows="2" style="margin-top: 0px; margin-bottom: 0px; height: 58px;"></textarea>
        </div>
        <button id="submit_btn" class="ui button" type="submit">Submit</button>
    </form>
@endsection

@section('extra_scripts')
    <link rel="stylesheet" href="{{asset('css/test.css')}}"/>
@endsection