<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \DateTime;
use \App\Entry;
use \Session;
use \App\Tag;

class EntryController extends Controller
{

    public function index()
    {

        return view('tracker.welcome');
    }


    public function create()
    {
      $tags_for_checkbox= Tag::getTagsForCheckboxes();
      $tags_for_entry = [];

      return view('tracker.create')->with([
        'tags_for_checkbox' => $tags_for_checkbox,
      ]);
    }


    public function store(Request $request)
    {
        $this->validate($request, [
          'time_slept' => 'required',
          'time_woken' => 'required',
        ]);

        $time_slept = $request->input('time_slept'); // returns 2016-12-12T21:09
        $time_woken = $request->input('time_woken');
        $time_slept2= new DateTime($time_slept);
        $time_woken2= new DateTime($time_woken);

        $entry = new Entry();
        $entry->time_slept= $time_slept2;
        $entry->time_woken= $time_woken2;
        $entry->temperature_constant = $request->temperature_constant;
        $entry->notes = $request->notes;

        if($request->temperature !== ''){
          $entry->room_temperature = $request->temperature;
        }
        else{
          //do nothing
        }

        //store hours slept in database
        $time_interval = $time_slept2->diff($time_woken2);
        $hours_total = ($time_interval->format('%R%a') * 24) + ($time_interval->format('%H')) ;
        $mins_slept = $time_interval->format('%I');
        $total_slept = $hours_total + ($mins_slept /60);
        $entry->hours_slept = $total_slept;

        $entry->save();

        $tags = ($request->tags) ?: [];

        $entry -> tags()->sync($tags);
        $entry -> save();


        Session::flash('flash_message','Your entry was added');

        return redirect('/history');
    }


    public function show()
    {
        $entry = Entry::all();
        return view('tracker.history')->with('entries', $entry);
    }


    public function edit($id)
    {
        $entry = Entry::find($id);

        if(is_null($entry)) {
          Session::flash('flash_message', 'Entry not found');
        return redirect('/history');
        }

        if($entry){
          $tags_for_checkbox= Tag::getTagsForCheckboxes();
          $tags_for_entry = [];

          foreach($entry->tags as $tag){
            $tags_for_entry[] = $tag->name;
          }

          return view('tracker.edit')->with([
            'entry'=> $entry,
            'tags_for_checkbox' => $tags_for_checkbox,
            'tags_for_entry' => $tags_for_entry,
          ]);
        }
        else{
          Session::flash('flash_message','Entry not found');
          return redirect('/history');
        }
    }


    public function update(Request $request, $id)
    {
        $entry = Entry::find($request->id);

        $this->validate($request, [
          'time_slept' => 'required',
          'time_woken' => 'required',
        ]);

        //$time_slept = $request->input('time_slept'); // returns 2016-12-12T21:09
        //$time_woken = $request->input('time_woken');

        $time_slept = $request->time_slept; // returns 2016-12-12T21:09
        $time_woken = $request->time_woken;

        $time_slept2= new DateTime($time_slept);
        $time_woken2= new DateTime($time_woken);

        $entry -> time_slept = $time_slept;
        $entry -> time_woken = $time_woken;

        //gets temperature if not null;
        if($request->temperature !== ''){
          $entry->room_temperature = $request->temperature;
        }
        else{
          $entry->room_temperature = NULL;
        }
        $entry -> temperature_constant = $request -> temperature_constant;
        $entry -> notes = $request -> notes;

        $time_interval = $time_slept2->diff($time_woken2);
        $hours_total = ($time_interval->format('%R%a') * 24) + ($time_interval->format('%H')) ;
        $mins_slept = $time_interval->format('%I');
        $total_slept = $hours_total + ($mins_slept /60);

        $entry->hours_slept = $total_slept;

        $entry -> save();

        $tags = ($request->tags) ?: []; //if tags is not empty, set it to the new tags, else blank array

        $entry -> tags()->sync($tags);
        $entry -> save();

        Session::flash('flash_message','Your changes were saved');
        return redirect('/edit/'.$request->id);

    }


    public function delete($id)
    {
        $entry = Entry::find($id);

        if($entry){
          $entry->delete();
          Session::flash('flash_message','Your entry has been deleted');
          return redirect('/history');
        }
        else{
          Session::flash('flash_message','Entry not found');
          return redirect('/history');
        }
    }

    public function graph(){
      $entries = Entry::orderBy('time_woken', 'ASC')->get();
      $hours_slept = array();
      $time_woken_data = array();

      foreach($entries as $entry){
        $time_woken_data[] = substr($entry->time_woken, 0, 10);
        $hours_slept[] = $entry->hours_slept;
      }


      return view('tracker.graph')->with([
        'entries' => $entries,
        'time_woken_data' => $time_woken_data,
        'hours_slept' => $hours_slept,
      ]);
    }
}
?>
