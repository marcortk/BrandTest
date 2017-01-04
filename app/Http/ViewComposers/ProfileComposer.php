<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Models\User;
use App\Models\Category;
use Route;

class ProfileComposer
{
    /*public function __construct()
    {
    }
*/
    public function compose(View $view)
    {
    	$route = Route::getCurrentRoute();
    	//dd($route);
		//$subdomain = $route->getParameter('prefix');
        $categories = Category::orderByRaw('RAND()')->take(2)->get();
        $view->with('categories', $categories);
    }
}