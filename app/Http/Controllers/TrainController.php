<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class TrainController extends Controller
{
    public function index()
    {
        // $trains = Train::all();
        $trains = Train::where('date_start', '2022-02-18')->get();
        // $trains = Train::where('depart_station', 'Menton')->get();

        // dd($trains);
        $data = ['trains' => $trains];
        return view('home', $data);
    }
}
