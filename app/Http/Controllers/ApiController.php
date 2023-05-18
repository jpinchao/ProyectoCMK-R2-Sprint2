<?php

namespace App\Http\Controllers;
use GuzzleHttp\Client;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //API DE CHISTES
    public function ApiJoke()
    {
        $client = new Client();
        $response = $client->request('GET', 'https://icanhazdadjoke.com/', [
            'headers' => [
                'Accept' => 'application/json',
            ],
        ]);
        $joke = json_decode($response->getBody(), true)['joke'];
        $traduccion = new GoogleTranslate('es', 'en'); // Traduce de español a inglés
        $chiste = $traduccion->translate($joke);
        return compact('chiste', 'joke');
    }
    //API DE IMAGENES
    public function ApiPixabay(Request $request)
    {
        $searchTerm = $request->input('q');
        $client = new Client();
        $response = $client->request('GET', 'https://pixabay.com/api/', [
            'query' => [
                'key' => '36472138-0e3f5849b904dffcf8e5b74b5', // API Key
                'q' => $searchTerm,
            ],
        ]);
        $data = json_decode($response->getBody(), true);
        $images = $data['hits'];
        return response()->json(['hits' => $images]);
    }
}
