<?php

namespace App\Http\Controllers;

use App\Note;
use App\Mission;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\MissionRequest;

class MissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $missions = Auth::user()->missions;

        /* foreach($missions as $mission) {
            $a[] = $mission->notes;
        }

        foreach ($missions as $mission) {
            $b[] = $mission->fraisKms;
        }

        dd($a); */

        return view('missions.index', compact('missions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('missions.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MissionRequest $request)
    {
        Mission::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'user_id' => Auth::user()->id,
        ]);

        return redirect()->route('missions.index')->withStatus(__('Missions successfully created.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Mission $mission)
    {
        $c = 0;
        $d = 0;

        if (count($mission->notes) != 0) {
            foreach ($mission->notes as $note) {
                $a[] = $note;
                $c = $c + $note->ttc;
            }
        } else {
            $a[] = "No data";
        }

        if (count($mission->fraisKms) != 0) {
            foreach ($mission->fraisKms as $fraisKm) {
                $b[] = $fraisKm;
                $d = $d + $fraisKm->ttc;
            }
        } else {
            $b[] = "No data";
        }

        $e = $c + $d;

        $s = array_merge($a, $b);

        return view('missions.show', compact('mission', 's', 'e'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Mission $mission)
    {
        return view('missions.edit', compact('mission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Mission $mission)
    {
        foreach ($mission->notes as $note) {
            $note->etat = "À la compta";
            $note->save();
        }

        foreach ($mission->fraisKms as $fraisKm) {
            $fraisKm->etat = "À la compta";
            $fraisKm->save();
        }

        return back()->withStatus(__('Cette mission a été envoyée à la compta'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mission $mission)
    {
        $mission->delete();

        return back()->withStatus(__('Mission successfully deleted.'));
    }

}
