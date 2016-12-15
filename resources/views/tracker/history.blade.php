@extends ('layouts.master')

@section('content')
  <div class='entries'>
    @foreach ($entries as $entry)
      <div class = "entry">
        <span><h3> <a href='/edit/{{$entry->id}}'>Entry # {{$entry->id}} </a>
        <a href= '/edit/{{$entry->id}}'><img src='/edit-icon.png' width='25px' height= '25px'></a>
        <a href= '/delete/{{$entry->id}}'><img src='/delete-icon.png' width='25px' height='25px'></a></h3></span>

      <h5> Slept at: {{$entry -> time_slept}}<br>
        Woke up: {{$entry->time_woken}}<br>
        Temperature: {{$entry->room_temperature}}<br>
        Notes: {{$entry -> notes}}</h5><br><br>
      </div>
    @endforeach
  </div>
@stop
