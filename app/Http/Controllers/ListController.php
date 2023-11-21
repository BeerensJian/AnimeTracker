<?php

namespace App\Http\Controllers;

use App\Models\Anime;
use Illuminate\Http\Request;

class ListController extends Controller
{
    public function index()
    {

        return view('list.index', [
            'animes' => Anime::all()
        ]);
    }
}
