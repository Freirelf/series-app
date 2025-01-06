<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SerieController extends Controller
{
    public function index(Request $request)
    {
        $series = [
            'The Walking Dead',
            'The Flash',
            'Arrow',
            'The 100',
            'Agents of Shield',
            'Supergirl',
            'Legends of Tomorrow',
            'Black Lightning',
            'Gotham',
            'Lucifer',
            'The Punisher',
            'Daredevil',
            'Jessica Jones',
            'Luke Cage',
            'Iron Fist',
            'The Defenders',
            'The Witcher',
            'Stranger Things',
            'The Umbrella Academy',
        ];

        // return view('list-series', [
        //     'series' => $series
        // ]);
        
        // return view('list-series', compact('series'));
        return view('series.index') -> with('series', $series);
    }

    public function create()
    {
        return view('series.create');
    }
}
