<?php

namespace App\Http\Controllers;

use App\Note;
use App\Mission;
use App\Http\Requests\NoteRequest;
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

    public function createNote(Mission $mission)
    {
        return view('notes.create', compact('mission'));
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

    public function storeNote(NoteRequest $request, Mission $mission)
    {
        Note::create([
            'title' => $request->input('title'),
            'pays' => $request->input('pays'),
            'ttc' => $request->input('ttc'),
            'tva' => $request->input('tva'),
            'description' => $request->input('description'),
            'image' => $request->input('image'),
            'mission_id' => $mission->id,
        ]);

        return back()->withSuccess('Great! Image has been successfully uploaded.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Mission $mission)
    {
        return view('missions.show', compact('mission'));
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
    public function update(MissionRequest $request, Mission $mission)
    {
        $mission->update($request->all());

        return back()->withStatus(__('Mission successfully updated.'));
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
