<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Return all data to view
     *
     * @param Request $request
     * @return Factory|View
     */
    public function getData(Request $request)
    {
        //env keys
        $mapKey = env('MAPBOX_API_KEY');
        $propKey = env('PROPDATA_API_KEY');

        $address = $request->address;
        $geocodeSearch = $this->geocodeSearch($address, $mapKey);
        //check placetype and store postcode accordingly
        if ($geocodeSearch->place_type[0] === 'postcode') {
            $postcode = $geocodeSearch->text;
        } else {
            $postcode = $geocodeSearch->context[0]->text;
        }

        return view('layouts.default');
    }

    //    /**
    //     * generate background image url
    //     * @param $mapKey
    //     * @param $latlng
    //     * @return string
    //     */
    //    public function backgroundImage($mapKey, $latlng)
    //    {
    //        //generate url for background image
    //        $endpoint = 'https://api.mapbox.com/styles/v1/mapbox/dark-v10/static/';
    //        $zoom = '13.01/';
    //        $res = '1280x550@2x';
    //        $key = '?access_token=' . $mapKey;
    //        //completed background image
    //        return $endpoint . $latlng[0] . ',' . $latlng[1] . ',' . $zoom . $res . $key;
    //    }

    /**
     * geocode searched address
     *
     * @param $address
     * @param $mapKey
     * @return mixed
     */
    public function geocodeSearch($address, $mapKey)
    {
        $endpoint = 'https://api.mapbox.com/geocoding/v5/mapbox.places/';
        $url = $endpoint . $address . '.json?access_token=' . $mapKey;
        $response = $this->getApiRequest($url);

        return $response->features[0];
    }

    /**
     * get request helper
     *
     * @param $url
     * @return mixed
     */
    public function getApiRequest($url)
    {
        $client = new Client();

        $response = $client->get($url);

        return json_decode($response->getBody());
    }

}
