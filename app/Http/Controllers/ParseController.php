<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class ParseController extends Controller
{
    public function parse() {
        $client = new Client();
        $name = str_replace(" ", "_", ucwords('roy williams'));

        $crawler = $client->request('GET', 'http://dbpedia.org/page/'.$name);
        $ambiguates = $crawler->filterXPath('//a[@rel="dbo:wikiPageDisambiguates"]');
        if($ambiguates->count() > 0) {
            $ambiguates->each(function($node) {
                print str_replace("_", " ", str_replace("dbr:", "", $node->text()))."<br>";
            });
        }
        else {
            $image = $crawler->filterXPath('//a[@rel="dbo:thumbnail"]')->attr('href');
            $biography = $crawler->filterXPath('//span[@property="dbo:abstract" and @xml:*="en"]')->text();
            print $biography."<br><br>";
            print $image;
        }
    }

    public function search(Request $request) {
        $client = new Client();
        $name = str_replace(" ", "_", ucwords($request->name));
    }
}
