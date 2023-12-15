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
        $searchQuery = request()->input('search');
        if ($searchQuery) {
            $response = $this->APIService->search($searchQuery)->execute();
        } else {
            $response = $this->APIService->status('airing')->execute();
        }

        return view('anime.index', [
            'animes' => $response['data'],
            'pagination' => $response['pagination']
        ]);
    }

    public function show(string $id)
    {
        $response = $this->APIService->findFullById($id);

        return view('anime.show', [
            'anime' => $response['data']
        ]);

    }
}
