<?php


namespace App\Repositories;

use GuzzleHttp\Client;

class GuzzleHttpRequest
{

	/** @phpstan-ignore-next-line  */
		protected $client;

	public function __construct()
	{

		$this->client = new Client([
            'base_uri' => config('app.base_uri')
        ]);

	}

	/**
	 * Send Get Request using GuzzleHttp
	 *
	 * @param string $url
	 *
	 * @return mixed
	 * @throws \GuzzleHttp\Exception\GuzzleException
	 */
	public function get($url)
	{

		$response = $this->client->request('GET', $url);

		return json_decode($response->getBody()->getContents());

	}

}