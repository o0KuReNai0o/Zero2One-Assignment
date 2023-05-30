<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Cache;

class MainController extends Controller
{
    public function search(Request $request)
    {
        //get request input
        $query = $request->input('query');

        //get result from google api then cache it to redis for 24 hours
        $results = Cache::remember('search.results.' . $query, 1440, function () use ($query) {
            //put GOOGLE_API_KEY in dotenv for security
            $apiKey = env('GOOGLE_API_KEY', '');
            $client = new Client();
            $url = 'https://maps.googleapis.com/maps/api/place/textsearch/json';
            $params = [
                'query' => [
                    'query' => $query,
                    'type' => 'restaurant',
                    'key' => $apiKey
                ]
            ];
            //using GET method to call google api
            $response = $client->get($url, $params);

            //get response and perform json_decode
            $data = json_decode($response->getBody()->getContents(), true);

            return $data['results'];
        });

        return response($results);
    }
}
