<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $c = 0;
        $d = 0;

        $x = 0;
        $y = 0;
        $z = 0;

        $missions = Auth::user()->missions;
        
        foreach ($missions as $mission) {

            $x = $x + 1;

            foreach($mission->notes as $note) {
                
                $c = $c + $note->ttc;
                $y = $y + 1;

            }

            foreach($mission->fraisKms as $fraisKm) {
                
                $d = $d + $fraisKm->ttc;
                $z = $z + 1;

            }
        }

        $e = $c + $d;

        $date = Carbon::now();
        return view('dashboard', compact('date', 'x', 'y', 'z', 'e'));
    }
}
