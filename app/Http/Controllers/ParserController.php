<?php

namespace App\Http\Controllers;

use App\Parser;
use Illuminate\Http\Request;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;


class ParserController extends Controller
{
    /**
     * Get content from html.
     *
     * @param $parser object parser settings
     * @param $link string link to html page
     *
     * @return array with parsing data
     * @throws \Exception
     */
    public function getContent()
    {
        $url = 'https://www.kinopoisk.ru/';

        // Get html remote text.
        $curl = curl_init();

        curl_setopt($curl, CURLOPT_URL, $url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, $url);

        $html = curl_exec($curl);

        $html = $this->clearHtml($html);

        $crawler = new Crawler(null, $url);

        $crawler->addHtmlContent($html, 'windows-1251');


        $a = 1 + 1;
        return json_encode([$a]);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Parser $parser
     * @return \Illuminate\Http\Response
     */
    public function show(Parser $parser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Parser $parser
     * @return \Illuminate\Http\Response
     */
    public function edit(Parser $parser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Parser $parser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parser $parser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Parser $parser
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parser $parser)
    {
        //
    }

    public function clearHtml($html)
    {
        trim($html);

    }
}


