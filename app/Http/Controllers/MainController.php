<?php

namespace App\Http\Controllers;

use App\Url;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $totalShorted = Url::count();
        return view('main.index', compact('totalShorted'));
    }
    public function short(Request $request)
    {
        $shorted = uniqid();
        $url = new Url;
        $url->url = $request->input('url');
        $url->short = $shorted;

        $url->save();
        return redirect()->route('success', compact('shorted'));
    }
    public function success($shorted)
    {
        $totalShorted = Url::count();
        $url = route('link', $shorted);
        return view('main.index', compact('totalShorted', 'url'));
    }
    public function link(Url $shorted)
    {
        return redirect($shorted->url);
    }
}
