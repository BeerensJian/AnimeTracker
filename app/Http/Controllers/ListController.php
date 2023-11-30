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
        $mal_id = request()->query('id');
        $response = $this->APIService->findById($mal_id);
        return view('list.create', [
            "anime" => $response['data']
        ]);
    }

    public function store()
    {
        //logic to store entry in db
    }
}
