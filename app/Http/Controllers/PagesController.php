<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home() {
        return view('home');
    }

    public function about() {
        return view('about');
    }

    public function gallery() {
    $photos = [];
    for ($i = 1; $i <= 15; $i++) {
        $photos[] = "photo{$i}.jpg";
    }
    return view('gallery', compact('photos'));
}

}
