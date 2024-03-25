<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NewsModel;

class NewsController extends Controller
{
    public function index()
    {
        $news = NewsModel::all();
        return view('news', compact('news'));
    }
}

