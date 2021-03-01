<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeglotController extends Controller{
    
    public function index( ){
        return view('index');
    }

    public function weglotLoad(){
        return view('weglot-load');

    }

    public function weglotAjaxAutocomplete(){
        return response()->json(
            array(
                0 => array(
                    'food' => "Carotte",
                    'cities' => "Cognac",
                    'animals' => "Lapin"
                ),
                1 => array(
                    'food' => "Chou",
                    'cities' => "Bordeaux",
                    'animals' => "Chien"
                ),
                2 => array(
                    'food' => "Noix",
                    'cities' => "Rocherfort",
                    'animals' => "Chat"
                ),
                3 => array(
                    'food' => "Fraise",
                    'cities' => "Paris",
                    'animals' => "Pigeon"
                ),
            )
        );
    }

    public function weglotAjax(){
        return response()->json(
            array (
                'count' => 82,
                'next' => 'http://swapi.dev/api/people/?page=2',
                'previous' => NULL,
                'results' => 
                array (
                  0 => 
                  array (
                    'name' => 'Luke Skywalker',
                    'height' => '172',
                    'mass' => '77',
                    'hair_color' => 'blon',
                    'skin_color' => 'fair',
                    'eye_color' => 'bleu',
                    'birth_year' => '19BBY',
                    'gender' => 'male',
                    'homeworld' => 'http://swapi.dev/api/planets/1/',
                    'films' => 
                    array (
                      0 => 'http://swapi.dev/api/films/1/',
                      1 => 'http://swapi.dev/api/films/2/',
                      2 => 'http://swapi.dev/api/films/3/',
                      3 => 'http://swapi.dev/api/films/6/',
                    ),
                    'species' => 
                    array (
                    ),
                    'vehicles' => 
                    array (
                      0 => 'http://swapi.dev/api/vehicles/14/',
                      1 => 'http://swapi.dev/api/vehicles/30/',
                    ),
                    'starships' => 
                    array (
                      0 => 'http://swapi.dev/api/starships/12/',
                      1 => 'http://swapi.dev/api/starships/22/',
                    ),
                    'created' => '2014-12-09T13:50:51.644000Z',
                    'edited' => '2014-12-20T21:17:56.891000Z',
                    'url' => 'http://swapi.dev/api/people/1/',
                  ),
                  1 => 
                  array (
                    'name' => 'C-3PO',
                    'height' => '167',
                    'mass' => '75',
                    'hair_color' => 'n/a',
                    'skin_color' => 'gold',
                    'eye_color' => 'jaune',
                    'birth_year' => '112BBY',
                    'gender' => 'n/a',
                    'homeworld' => 'http://swapi.dev/api/planets/1/',
                    'films' => 
                    array (
                      0 => 'http://swapi.dev/api/films/1/',
                      1 => 'http://swapi.dev/api/films/2/',
                      2 => 'http://swapi.dev/api/films/3/',
                      3 => 'http://swapi.dev/api/films/4/',
                      4 => 'http://swapi.dev/api/films/5/',
                      5 => 'http://swapi.dev/api/films/6/',
                    ),
                    'species' => 
                    array (
                      0 => 'http://swapi.dev/api/species/2/',
                    ),
                    'vehicles' => 
                    array (
                    ),
                    'starships' => 
                    array (
                    ),
                    'created' => '2014-12-10T15:10:51.357000Z',
                    'edited' => '2014-12-20T21:17:50.309000Z',
                    'url' => 'http://swapi.dev/api/people/2/',
                  ),
                  2 => 
                  array (
                    'name' => 'R2-D2',
                    'height' => '96',
                    'mass' => '32',
                    'hair_color' => 'n/a',
                    'skin_color' => 'white, bleu',
                    'eye_color' => 'rouge',
                    'birth_year' => '33BBY',
                    'gender' => 'n/a',
                    'homeworld' => 'http://swapi.dev/api/planets/8/',
                    'films' => 
                    array (
                      0 => 'http://swapi.dev/api/films/1/',
                      1 => 'http://swapi.dev/api/films/2/',
                      2 => 'http://swapi.dev/api/films/3/',
                      3 => 'http://swapi.dev/api/films/4/',
                      4 => 'http://swapi.dev/api/films/5/',
                      5 => 'http://swapi.dev/api/films/6/',
                    ),
                    'species' => 
                    array (
                      0 => 'http://swapi.dev/api/species/2/',
                    ),
                    'vehicles' => 
                    array (
                    ),
                    'starships' => 
                    array (
                    ),
                    'created' => '2014-12-10T15:11:50.376000Z',
                    'edited' => '2014-12-20T21:17:50.311000Z',
                    'url' => 'http://swapi.dev/api/people/3/',
                  ),
                  3 => 
                  array (
                    'name' => 'Darth Vader',
                    'height' => '202',
                    'mass' => '136',
                    'hair_color' => 'none',
                    'skin_color' => 'white',
                    'eye_color' => 'jaune',
                    'birth_year' => '41.9BBY',
                    'gender' => 'male',
                    'homeworld' => 'http://swapi.dev/api/planets/1/',
                    'films' => 
                    array (
                      0 => 'http://swapi.dev/api/films/1/',
                      1 => 'http://swapi.dev/api/films/2/',
                      2 => 'http://swapi.dev/api/films/3/',
                      3 => 'http://swapi.dev/api/films/6/',
                    ),
                    'species' => 
                    array (
                    ),
                    'vehicles' => 
                    array (
                    ),
                    'starships' => 
                    array (
                      0 => 'http://swapi.dev/api/starships/13/',
                    ),
                    'created' => '2014-12-10T15:18:20.704000Z',
                    'edited' => '2014-12-20T21:17:50.313000Z',
                    'url' => 'http://swapi.dev/api/people/4/',
                  ),
                  4 => 
                  array (
                    'name' => 'Leia Organa',
                    'height' => '150',
                    'mass' => '49',
                    'hair_color' => 'marron',
                    'skin_color' => 'light',
                    'eye_color' => 'marron',
                    'birth_year' => '19BBY',
                    'gender' => 'female',
                    'homeworld' => 'http://swapi.dev/api/planets/2/',
                    'films' => 
                    array (
                      0 => 'http://swapi.dev/api/films/1/',
                      1 => 'http://swapi.dev/api/films/2/',
                      2 => 'http://swapi.dev/api/films/3/',
                      3 => 'http://swapi.dev/api/films/6/',
                    ),
                    'species' => 
                    array (
                    ),
                    'vehicles' => 
                    array (
                      0 => 'http://swapi.dev/api/vehicles/30/',
                    ),
                    'starships' => 
                    array (
                    ),
                    'created' => '2014-12-10T15:20:09.791000Z',
                    'edited' => '2014-12-20T21:17:50.315000Z',
                    'url' => 'http://swapi.dev/api/people/5/',
                  ),
                  5 => 
                  array (
                    'name' => 'Owen Lars',
                    'height' => '178',
                    'mass' => '120',
                    'hair_color' => 'marron, grey',
                    'skin_color' => 'light',
                    'eye_color' => 'bleu',
                    'birth_year' => '52BBY',
                    'gender' => 'male',
                    'homeworld' => 'http://swapi.dev/api/planets/1/',
                    'films' => 
                    array (
                      0 => 'http://swapi.dev/api/films/1/',
                      1 => 'http://swapi.dev/api/films/5/',
                      2 => 'http://swapi.dev/api/films/6/',
                    ),
                    'species' => 
                    array (
                    ),
                    'vehicles' => 
                    array (
                    ),
                    'starships' => 
                    array (
                    ),
                    'created' => '2014-12-10T15:52:14.024000Z',
                    'edited' => '2014-12-20T21:17:50.317000Z',
                    'url' => 'http://swapi.dev/api/people/6/',
                  ),
                  6 => 
                  array (
                    'name' => 'Beru Whitesun lars',
                    'height' => '165',
                    'mass' => '75',
                    'hair_color' => 'marron',
                    'skin_color' => 'light',
                    'eye_color' => 'bleu',
                    'birth_year' => '47BBY',
                    'gender' => 'female',
                    'homeworld' => 'http://swapi.dev/api/planets/1/',
                    'films' => 
                    array (
                      0 => 'http://swapi.dev/api/films/1/',
                      1 => 'http://swapi.dev/api/films/5/',
                      2 => 'http://swapi.dev/api/films/6/',
                    ),
                    'species' => 
                    array (
                    ),
                    'vehicles' => 
                    array (
                    ),
                    'starships' => 
                    array (
                    ),
                    'created' => '2014-12-10T15:53:41.121000Z',
                    'edited' => '2014-12-20T21:17:50.319000Z',
                    'url' => 'http://swapi.dev/api/people/7/',
                  ),
                  7 => 
                  array (
                    'name' => 'R5-D4',
                    'height' => '97',
                    'mass' => '32',
                    'hair_color' => 'n/a',
                    'skin_color' => 'white, rouge',
                    'eye_color' => 'rouge',
                    'birth_year' => 'unknown',
                    'gender' => 'n/a',
                    'homeworld' => 'http://swapi.dev/api/planets/1/',
                    'films' => 
                    array (
                      0 => 'http://swapi.dev/api/films/1/',
                    ),
                    'species' => 
                    array (
                      0 => 'http://swapi.dev/api/species/2/',
                    ),
                    'vehicles' => 
                    array (
                    ),
                    'starships' => 
                    array (
                    ),
                    'created' => '2014-12-10T15:57:50.959000Z',
                    'edited' => '2014-12-20T21:17:50.321000Z',
                    'url' => 'http://swapi.dev/api/people/8/',
                  ),
                  8 => 
                  array (
                    'name' => 'Biggs Darklighter',
                    'height' => '183',
                    'mass' => '84',
                    'hair_color' => 'black',
                    'skin_color' => 'light',
                    'eye_color' => 'marron',
                    'birth_year' => '24BBY',
                    'gender' => 'male',
                    'homeworld' => 'http://swapi.dev/api/planets/1/',
                    'films' => 
                    array (
                      0 => 'http://swapi.dev/api/films/1/',
                    ),
                    'species' => 
                    array (
                    ),
                    'vehicles' => 
                    array (
                    ),
                    'starships' => 
                    array (
                      0 => 'http://swapi.dev/api/starships/12/',
                    ),
                    'created' => '2014-12-10T15:59:50.509000Z',
                    'edited' => '2014-12-20T21:17:50.323000Z',
                    'url' => 'http://swapi.dev/api/people/9/',
                  ),
                  9 => 
                  array (
                    'name' => 'Obi-Wan Kenobi',
                    'height' => '182',
                    'mass' => '77',
                    'hair_color' => 'auburn, white',
                    'skin_color' => 'fair',
                    'eye_color' => 'bleu-gray',
                    'birth_year' => '57BBY',
                    'gender' => 'male',
                    'homeworld' => 'http://swapi.dev/api/planets/20/',
                    'films' => 
                    array (
                      0 => 'http://swapi.dev/api/films/1/',
                      1 => 'http://swapi.dev/api/films/2/',
                      2 => 'http://swapi.dev/api/films/3/',
                      3 => 'http://swapi.dev/api/films/4/',
                      4 => 'http://swapi.dev/api/films/5/',
                      5 => 'http://swapi.dev/api/films/6/',
                    ),
                    'species' => 
                    array (
                    ),
                    'vehicles' => 
                    array (
                      0 => 'http://swapi.dev/api/vehicles/38/',
                    ),
                    'starships' => 
                    array (
                      0 => 'http://swapi.dev/api/starships/48/',
                      1 => 'http://swapi.dev/api/starships/59/',
                      2 => 'http://swapi.dev/api/starships/64/',
                      3 => 'http://swapi.dev/api/starships/65/',
                      4 => 'http://swapi.dev/api/starships/74/',
                    ),
                    'created' => '2014-12-10T16:16:29.192000Z',
                    'edited' => '2014-12-20T21:17:50.325000Z',
                    'url' => 'http://swapi.dev/api/people/10/',
                  ),
                ),
              )
        );
    }
}
