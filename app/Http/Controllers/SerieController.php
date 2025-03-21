<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SerieController extends Controller
{
    public function index()
    {       
        // $series = Serie::all();

        $series = Serie::query()->orderBy('name')->get();

        // $series = DB::select('select * from series');

        // $series = [
        //     'The Walking Dead',
        //     'The Flash',
        //     'Arrow',
        //     'The 100',
        //     'Agents of Shield',
        //     'Supergirl',
        //     'Legends of Tomorrow',
        //     'Black Lightning',
        //     'Gotham',
        //     'Lucifer',
        //     'The Punisher',
        //     'Daredevil',
        //     'Jessica Jones',
        //     'Luke Cage',
        //     'Iron Fist',
        //     'The Defenders',
        //     'The Witcher',
        //     'Stranger Things',
        //     'The Umbrella Academy',
        // ];

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

    public function store(Request $request)
    {
        $serieName = $request->input('name');
        $serie = new Serie();
        $serie->name = $serieName;
        $serie->save();
        
        return redirect('/series');
    }
}
