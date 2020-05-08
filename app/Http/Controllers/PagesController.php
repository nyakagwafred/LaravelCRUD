<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function index()
    {
        $title = 'Welcome to LSAPP';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about()
    {
        return view('pages.about');
    }

    public function services()
    {
        $data = array(
            'title' => 'Our Services',
            'services' => ['Web Design', 'Coding and Programming', 'SEO Services']
        );

        return view('pages.services')->with($data);
    }
}
