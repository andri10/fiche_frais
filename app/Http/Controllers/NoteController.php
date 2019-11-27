<?php

namespace App\Http\Controllers;

use App\Note;
use App\FraisKm;
use App\Mission;
use Illuminate\Http\Request;
use App\Http\Requests\NoteRequest;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notes = Note::all();
        $fraisKms = FraisKm::all();

        foreach ($notes as $note) {
            $c[] = $note;
        }

        foreach ($fraisKms as $fraisKm) {
            $d[] = $fraisKm;
        }

        $e = array_merge($c, $d);

        /* dd($e); */

        return view('notes.index', compact('e'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Mission $mission)
    {
        return view('notes.create', compact('mission'));
    }
    public function createNote()
    {
        return view('notes.createNote');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NoteRequest $request, Mission $mission)
    {

        $note = new Note();

        $note->title = $request->input('title');
        $note->pays = $request->input('pays');
        $note->ttc = $request->input('ttc');
        $note->tva = $request->input('tva');
        $note->description = $request->input('description');
        $note->mission_id = $mission->id;

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('image/notes', $filename);
            $note->image = $filename;
        } else {
            $note->image = 'default.svg';
        }

        $note->save();

        return back()->withSuccess('Great! Image has been successfully uploaded.');
    }

    public function storeNote(NoteRequest $request, Mission $mission)
    {

        $note = new Note();

        $note->title = $request->input('title');
        $note->pays = $request->input('pays');
        $note->ttc = $request->input('ttc');
        $note->tva = $request->input('tva');
        $note->description = $request->input('description');

        if ($request->hasfile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('image/notes', $filename);
            $note->image = $filename;
        } else {
            $note->image = 'default.svg';
        }

        $note->save();

        return back()->withSuccess('Great! Image has been successfully uploaded.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
