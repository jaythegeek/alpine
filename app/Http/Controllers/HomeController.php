<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['fetchJobs']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function fetchJobs(Request $request, Client $guzzleClient)
    {
        $url = 'https://alpine-elements.workable.com/spi/v3/jobs?state=published&include_fields=description,full_description';

        $response = $guzzleClient->request('GET', $url, [
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Bearer ' . config('services.workable.key'),
            ],
            'verify' => false,
        ]);
        $data = json_decode($response->getBody());
        $jobs = new Collection;
        foreach ($data->jobs as $d) {
            if ($request->get('type') != 'all') {
                if ($d->code == $request->get('type')) {
                    $jobs->push($d);
                }
            } else {
                $jobs->push($d);
            }
        }
        return $jobs;
    }

}
