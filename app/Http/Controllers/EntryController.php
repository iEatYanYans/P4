<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \DateTime;

class EntryController extends Controller
{

    public function index()
    {
        return view('tracker.welcome');
    }


    public function create()
    {
        return view('tracker.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
          'time_slept' => 'required',
          'time_woken' => 'required',
        ]);

        $time_slept = $request->input('time_slept'); // returns 2016-12-12T21:09
        $time_woken = $request->input('time_woken');
        //$time_elapsed = $time_woken -$time_slept
        $time_slept2= new DateTime($time_slept);
        $time_woken2= new DateTime($time_woken);
        $time_interval = $time_slept2->diff($time_woken2);
        $hours_total = ($time_interval->format('%R%a') * 24) + ($time_interval->format('%H')) ;
        $mins_slept = $time_interval->format('%I');
        //echo $time_interval->format('You slept %R%a days and %H:%I:%S hours.'); //FIND A WAY TO CONVERT DAYS TO HOURS ONLY
        echo 'hours slept ' .$hours_total. ':' .$mins_slept;
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function delete($id)
    {
        //
    }
}
