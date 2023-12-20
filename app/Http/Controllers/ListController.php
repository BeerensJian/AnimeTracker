<?php

namespace App\Http\Controllers;

use App\Enum\AnimeStatus;
use App\Models\ListItem;
use App\Services\JikanAPIService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use function Laravel\Prompts\error;

class ListController extends Controller
{

    public function __construct(public JikanAPIService $APIService)
    {
    }

    public function index()
    {
        return view('list.index', [
            'list_items' => Auth::user()->listItems
        ]);
    }

    public function show(ListItem $listItem)
    {
        //show List Item
        // Be able to change status, rating, episodes etc
        dd($listItem);
    }

    public function create()
    {
        $mal_id = request()->query('id');
        $response = $this->APIService->findById($mal_id);

        return view('list.create', [
            "anime" => $response['data'],
            "statuses" => AnimeStatus::cases()
        ]);
    }

    public function store()
    {
        //validate the data
        $attributes = request()->validate([
            'title_en' => ['string', 'nullable'],
            'title_jp' => ['required', 'string'],
            'description' => ['string', 'nullable'],
            'rating' => ['integer', 'between:0,10', 'nullable'],
            'episode' => ['required', 'integer', 'lt:total_episodes'],
            'total_episodes' => ['required', 'integer', 'gt:0'],
            'status' => ['required', Rule::in(AnimeStatus::cases())],
            'mal_id' => [],
            'image_url' => []
        ]);

        $attributes['user_id'] = Auth::id();

        //if validate ok, create an entry in db, linked to user
        ListItem::create($attributes);
        //redirect to index list if successfull.
        return redirect()->to('/list')->with('message', 'Entry has been added to your list');

    }
}
