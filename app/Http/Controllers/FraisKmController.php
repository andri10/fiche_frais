<?php

namespace App\Http\Controllers;

use App\Mission;
use Illuminate\Http\Request;
use App\Http\Requests\FraisKmRequest;

class FraisKmController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Mission $mission)
    {
        return view('fraisKm.create', compact('mission'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FraisKmRequest $request, Mission $mission)
    {
        Note::create([
            'title' => $request->input('title'),
            'depart' => $request->input('depart'),
            'arrivee' => $request->input('arrivee'),
            'trajet' => $request->input('trajet'),
            'description' => $request->input('description'),
            'start' => $request->input('start'),
            'arrival' => $request->input('arrival'),
            'image' => $request->input('image'),
            'mission_id' => $mission->id,
        ]);

        return back()->withSuccess('Great! Image has been successfully uploaded.');
    }
}
