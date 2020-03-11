<?php

namespace App\Http\Controllers;

use App\Url;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        return view('main.index');
    }
    public function short(Request $request)
    {
        $shorted = uniqid();
        $url = new Url;
        $url->url = $request->input('url');
        $url->short = $shorted;

        $url->save();
        return redirect()->route('success', ['shorted' => $shorted]);
    }
    public function success($shorted)
    {
        echo $shorted;
    }
    public function link(Url $shorted)
    {
        // echo $shorted->url;
        return redirect($shorted->url);
    }
}
