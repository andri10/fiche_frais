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
    public function createFraisKm()
    {
        return view('fraisKms.createFraisKm');
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
            'title' => $request->input('depart') . " - " . $request->input('arrivee'),
            'depart' => $request->input('depart'),
            'arrivee' => $request->input('arrivee'),
            'trajets' => $request->input('trajets'),
            'ttc' => $request->input('ttc'),
            'description' => $request->input('description'),
            'start' => $request->input('start'),
            'arrival' => now(),
            'created_at' => now(),
            'image' => "defaultFraisKM.svg",
            'mission_id' => $mission->id,
        ]);

        return back()->withStatus(__('Ajoutée avec succès !'));
    }

    public function storeFraisKm(FraisKmRequest $request, Mission $mission)
    {

        FraisKm::create([
            'title' => $request->input('depart') . " - " . $request->input('arrivee'),
            'depart' => $request->input('depart'),
            'arrivee' => $request->input('arrivee'),
            'trajets' => $request->input('trajets'),
            'ttc' => $request->input('ttc'),
            'description' => $request->input('description'),
            'start' => $request->input('start'),
            'arrival' => now(),
            'created_at' => now(),
            'image' => "defaultFraisKM.svg",
        ]);

        return back()->withStatus(__('Ajoutée avec succès !'));
    }
}
