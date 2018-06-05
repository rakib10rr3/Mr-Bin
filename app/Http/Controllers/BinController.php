<?php

namespace App\Http\Controllers;

use App\Bin;
use GuzzleHttp\Client;
use Illuminate\Http\Request;

class BinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('bin.index');
    }

    public function apiGetAllData(Request $request)
    {
//        return $request->all();

        $client = new Client();
        if ($request->has('value')) {
//            return $request;
            $url = 'https://api.thingspeak.com/channels/504575/feeds.json?results=' . $request->get('value');
        } else {
            $url = 'https://api.thingspeak.com/channels/504575/feeds.json?results=10';
        }
        $res = $client->request('GET', $url);
        $data = $res->getBody();

        $datas = json_decode($data, TRUE);

        $last_distance = $datas['feeds'];

        $length = count($last_distance);
        $now_value = $last_distance[$length - 1]['field1'];
//        $now_value = 30;

        $now_value_in_percent = ($now_value*100)/255;

        $datas['latest_value'] = $now_value_in_percent;

//        var_dump($datas);


        return json_encode($datas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bin $bin
     * @return \Illuminate\Http\Response
     */
    public function show(Bin $bin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bin $bin
     * @return \Illuminate\Http\Response
     */
    public function edit(Bin $bin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Bin $bin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bin $bin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bin $bin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bin $bin)
    {
        //
    }
}
