<?php

namespace App\Http\Controllers;

use App\FraisKm;
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
        return view('fraisKms.create', compact('mission'));
    }
    public function createFraisKM()
    {
        return view('fraisKms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FraisKmRequest $request, Mission $mission)
    {

        FraisKm::create([
            'title' => $request->input('title'),
            'depart' => $request->input('depart'),
            'arrivee' => $request->input('arrivee'),
            'trajets' => $request->input('trajets'),
            'description' => $request->input('description'),
            'start' => now(),
            'arrival' => now(),
            'image' => "default.svg",
            'mission_id' => $mission->id,
        ]);

        return back()->withSuccess('Great! Image has been successfully uploaded.');
    }
}
