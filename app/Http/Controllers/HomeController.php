<?php

namespace App\Http\Controllers;

use App\Models\Generated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index(Request $request)
    {

        $randomString = Str::random(5);

        $short_url = env('APP_URL') . '/' . $randomString;

        Generated::create([
            'slug' => $randomString,
            'short_url' => $short_url,
            'redirect_to' => $request->url,
            'ip' => $request->ip()
        ]);

        return redirect('/')->with('url', $short_url);
        
    }

    public function redirect(Request $request)
    {
        $url = Generated::whereSlug($request->slug)->first();
        if(!$url) {
            abort(404);
        }
        return Redirect::to($url->redirect_to);
    }
}
