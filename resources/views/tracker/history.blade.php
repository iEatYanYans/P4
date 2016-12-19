@extends ('layouts.master')

@section('title')
@endsection

@section('content')
  <div class='entries'>
    <h2> All Entries </h2><br>
    @foreach ($entries as $entry)
      <div class = "entry">
          <span><button class= 'accordion'><h3 class= 'accordion-toggle'><b class='caret'></b> {{substr($entry->time_woken, 0, 10)}} </h3>
            <a href= '/edit/{{$entry->id}}'><img alt='edit' src='/edit-icon.png' width='25px' height= '25px'></img></a>
            <a href= '/delete/{{$entry->id}}'><img alt='delete' src='/delete-icon.png' width='25px' height='25px'></img></a>
          </button></span>
          <div class= 'accordion-panel'>
            <br><p> <b>Slept at:</b>   {{$entry -> time_slept}}<br>
            <b>Woke up:</b>   {{$entry->time_woken}}<br>
            <b>Temperature:</b>   {{$entry->room_temperature}} {{$entry->temperature_constant}}<br>
            <b>Notes:</b>   {{$entry -> notes}}</p><br>
            </div>
    </div>
    @endforeach


    <br><button id='deletebtn' name='deletebtn' onclick="confirmDel()">DELETE ALL</button>

    <script> accordionToggle() </script>
  </div>
@stop
