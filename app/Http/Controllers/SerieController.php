<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SerieController extends Controller
{
    public function index()
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

        $html = '<ul>';

        foreach ($series as $serie) 
        {
            $html .= "<li>$serie</li>";
        }

        $html .= '</ul>';

        return $html;
    }
}
