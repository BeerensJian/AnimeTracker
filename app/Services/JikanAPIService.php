<?php


namespace App\Services;

use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;

class JikanAPIService
{
    const  BASEURL = 'https://api.jikan.moe/v4/anime';
    protected bool $sfw = false;

    protected string $url = JikanAPIService::BASEURL;

    /**
     * search for anime containing a query
     * @param string $query
     * @return self
     */
    public function search(string $query)
    {
        $this->appendQuery('q', $query);
        return $this;
    }

    /**
     * @throws RequestException
     */
    public function findById(int|string $id)
    {
        $response = Http::get(static::BASEURL . "/$id");
        return $response->throw()->json();
    }

    /**
     * @throws RequestException
     */
    public function execute()
    {
        $response = Http::get($this->url);
        return $response->throw()->json();
    }

    protected function appendQuery(string $key, string $value): self
    {
        $separator = '&';
        if (!str_contains($this->url, '?')) {
            $separator = '?';
        }

        $this->url .= "{$separator}{$key}={$value}";
        return $this;
    }
}
