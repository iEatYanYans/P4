@extends ('layouts.master')

@section('title')
  Sleep History
@stop

@section('content')
  <div class='entries'>
    @foreach ($entries as $entry)
      <h3> <a href='/edit/{{$entry->id}}'>ID: {{$entry->id}} </a></h3>
      <h5> Slept at: {{$entry -> time_slept}}<br>
        Woke up: {{$entry->time_woken}}<br>
        Temperature: {{$entry->room_temperature}}<br>
        Notes: {{$entry -> notes}}</h5><br><br>
    @endforeach
  </div>
@stop
