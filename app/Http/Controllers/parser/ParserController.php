<?php

namespace App\Http\Controllers\parser;

use App\Http\Controllers\Controller;
use App\Parser;
use Illuminate\Http\Request;
use Symfony\Component\DomCrawler\Crawler;
use Goutte\Client;

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
        $page = 832;

        $hrefs = $this->parsing();

        $a = 1 + 1;

        return json_encode([$a]);
    }

    private function parsing()
    {
        $kinopoisk_hrefs = array();
        $hdgo_hrefs = array();
        $url = "http://hdgo.club/films?page=832";

        $client = new Client();

        $crawler  = $client->request('GET', $url);

        $kinopoisk_links = $crawler->filter('body div.li_gen .btn-primary12 a');
        $hdgo_videos = $crawler->filter('body div.li_gen .btn-primary13 a');

        foreach ($kinopoisk_links as $link) {
            $href = $link->getAttribute('href');
            $href = "https" . substr($href, 4);
            array_push($kinopoisk_hrefs, "" . $href);
        }

        foreach ($hdgo_videos as $link) {
            $href = "http:" . $link->getAttribute('href');
            array_push($hdgo_hrefs, $href);
        }

        $links = array_combine($kinopoisk_hrefs, $hdgo_hrefs);

        foreach ($links as $link) {
//            $kinopoisk_json = $this->get_kinoposik_info(key($links));
            $video_iframe = $this->get_video_iframe($link);
        }
        return $kinopoisk_hrefs;
    }

    private function get_kinoposik_info($link)
    {
        $client = new Client();
        $crawler = $client->request('GET', $link);
    }

    private function get_video_iframe($link)
    {
        $client = new Client();
        $crawler = $client->request('GET', $link);
        $value =  $crawler->filter('#embed_code_textarea')->getNode(0);
        $value = $value->attributes;
        return $value;
    }
}




