<?php

namespace App\Http\Controllers;

use App\Models\ListItem;
use App\Services\JikanAPIService;
use HttpException;
use Illuminate\Http\Request;
use function Laravel\Prompts\error;

class ListController extends Controller
{

    public function __construct(public JikanAPIService $APIService)
    {
    }

    public function index()
    {
        $response = $this->APIService->search('jujutsu')->execute();

        return view('list.index', [
            'animes' => $response
        ]);
    }

    public function create()
    {
        dd(\request());
        return view('list.create');
    }
}
