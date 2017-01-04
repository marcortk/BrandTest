<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMailer;
use App\Models\User;
use App\Models\Category;
use App\Models\Tag;
use Illuminate\Support\Facades\Mail;

class UserController extends Controller
{
    public function send()
    {
        $user = User::findOrFail(1);
        Mail::to($user)->send(new TestMailer($user));
    }

    public function showCategory($category)
    {
        return view('pages.category')->with($category);
    }
}
