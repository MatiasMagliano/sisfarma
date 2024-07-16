<?php

namespace App\Http\Controllers;

use DOMDocument;
use GuzzleHttp\Client;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        // News from Ministerio de Salud de la nación
        // $client = new Client();
        // $response = $client->request('GET', 'https://ministeriodesalud.cba.gov.ar/novedades/');
        // $response_status = $response->getStatusCode();
        // $html = $response->getBody()->getContents();

        // if($response_status == 200)
        // {
        //     $dom = New DOMDocument();
        // }
        return view('home');
    }
}
