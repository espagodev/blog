<?php

namespace App\Repositories;

class HttpRequestClass
{

	/**
	 * @var GuzzleHttpRequest
	 * @var HttpClientRequest	
	 */
    /** @phpstan-ignore-next-line  */

    private $client;

	public function __construct()
	{

		$httpClient = config('app.http_client');
		if ($httpClient == 'GuzzleHttp') {
			$this->client = new GuzzleHttpRequest();
		} else {
			$this->client = new HttpClientRequest();
		}

	}

	/**
	 * Send Get Request
	 *
	 * @param  string $url
	 *
	 * @return mixed
	 */
	public function get($url)
	{

		$response = $this->client->get($url);

		return $response;

	}

	/**
	 * Send Post Request
	 *
	 * @param string $url
	 * @param string $data
     * 
     * @return mixed
	 */
	public function post($url, $data)
	{

	}

}