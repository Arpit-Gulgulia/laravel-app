<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome!';
        return view('pages.index',compact('title'));
    }

    public function about(){
        $title = 'About!';
        return view('pages.about')->with('title',$title);
    }

    public function services() {
        $data = [
            'title' => 'Services',
            'services' => ['Web designing', 'Programming', 'Web development']
        ];
        return view('pages.services')->with($data);
    }
}
