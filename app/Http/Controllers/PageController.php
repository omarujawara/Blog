<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index(){
        $title = "Welcome to Laravel";
        return view('pages.index', compact('title'));
    }
    public function about(){
        $title = "About Us";
        return view('pages.about')->with('title', $title);
    }
    public function service(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming','SEO']
        );
        return view('pages.service')->with($data);
    }
}
