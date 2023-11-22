<?php

namespace App\Http\Controllers;

use App\Services\JikanAPIService;
use Illuminate\Http\Request;

class AnimeController extends Controller
{
    public JikanAPIService $APIService;

    public function __construct(JikanAPIService $service)
    {
        $this->APIService = $service;
    }

    public function index()
    {
        $response = $this->APIService->search('jujutsu')->execute();


        return view('anime.index', [
            'animes' => $response['data'],
            'pagination' => $response['pagination']
        ]);
    }
}
