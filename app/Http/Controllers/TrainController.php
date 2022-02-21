<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;
use Carbon\Carbon;

class TrainController extends Controller
{
    public function index()
    {
        $trains = Train::all();
        // selezione treni del giorno corrente
        
        // $trains = Train::where('date_start','>=', Carbon::today())->get();


        // $trains = Train::where('depart_station', 'Menton')->get();

        // dd($trains);
        $data = ['trains' => $trains];
        return view('home', $data);
    }
    public function show(Train $train)
    {
        return view ('show', compact('train'));
    }

}

