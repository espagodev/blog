<?php

namespace App\Repositories;

use Illuminate\Support\Facades\Http;

class HttpClientRequest
{

    /** @phpstan-ignore-next-line  */
    protected $baseUri;

    public function __construct()
    {
        $this->baseUri = config('app.base_uri');
    }

    /**
     * Send Get Request using Http Client
     *
     * @param string $url
     *
     * @return mixed
     */
    public function get($url)
    {
        $response = Http::get($this->baseUri . '/' . $url);
        /** @phpstan-ignore-next-line  */
        return json_decode($response->getBody()->getContents());
    }
}
