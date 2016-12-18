@extends ('layouts.master')

@section('title')
@endsection

@section('content')
  <div class='entries'>
    @foreach ($entries as $entry)
      <div class = "entry">
          <button class= 'accordion'> <span><h3 class= 'accordion-toggle'> {{substr($entry->time_woken, 0, 10)}}
        <a href= '/edit/{{$entry->id}}'><img src='/edit-icon.png' width='25px' height= '25px'></a>
        <a href= '/delete/{{$entry->id}}'><img src='/delete-icon.png' width='25px' height='25px'></a> <b class='caret'></b></h3></button></span>
      <div class= 'accordion-panel'>
      <br><p> Slept at: {{$entry -> time_slept}}<br>
        Woke up: {{$entry->time_woken}}<br>
        Temperature: {{$entry->room_temperature}} {{$entry->temperature_constant}}<br>
        Notes: {{$entry -> notes}}</p><br>
      </div>
    </div>
    @endforeach
    <script type='text/javascript'>
    $(document).ready(function(){
      var acc = document.getElementsByClassName("accordion");
      var i;

      for (i = 0; i < acc.length; i++) {
        acc[i].onclick = function(){
            this.classList.toggle("active");
            this.nextElementSibling.classList.toggle("show");
        };
      };
    })
      </script>
  </div>
@stop
