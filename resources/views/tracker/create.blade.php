@extends('layouts.master')

@section('content')
<div class = 'content'>
  <h1> Record New Entry </h1>
    <form method='POST' action='/store' name='entryform' class='form-data'>
        {{ csrf_field() }}
        <br>* Time Slept: <br> <!--MAKE A POP UP CLOCK-->
          <!--<div class="input-group clockpicker">
              <input type="text" class="form-control" value="09:30">
              <span class="input-group-addon">
              <span class="glyphicon glyphicon-time"></span>
              </span>
          </div>
          <script type="text/javascript">
            $('.clockpicker').clockpicker();
          </script>-->
        <input type='datetime-local' name='time_slept' id='time_slept' class='form-text' value = <?php echo date('Y-m-d').'T'.('00:00');?> required><br>
          @if($errors -> get('time_slept'))
            <ul>
              @foreach ($errors->get('time_slept') as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          @endif

        <br>* Time Woken:<br>
        <input type='datetime-local' name='time_woken' id= 'time_woken' class='form-text' value = <?php echo date('Y-m-d').'T'.('00:00');?> required><br>
        @if($errors -> get('time_woken'))
          <ul>
            @foreach ($errors->get('time_woken') as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        @endif

        <br> Temperature:
        <select name='temperature' class='form-text'>
          <option value=''>N/A</option>
        <?php for ($i=25; $i<100; $i++):?>
          <option value='<?php echo $i;?>'><?php echo $i;?></option>
        <?php endfor;?>
      </select><br>

        @if($errors -> get('temperature'))
          <ul>
            @foreach ($errors->get('temperature') as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        @endif
        <span> <input type='radio' name='temperature_constant' value='Fahrenheit' checked>Fahreheit &nbsp
        <input type='radio' name='temperature_constant' value='Celsius'> Celsius</span><br>
        <textarea name='notes' id='note' rows='5' cols='50' class='form-text'></textarea><br>
        @foreach($tags_for_checkbox as $tag_id => $tag_name)
        <input type='checkbox'
              name = 'tags[]'
              value = '{{$tag_id}}'
              > {{$tag_name}} <br>
        @endforeach

        <input type='submit' class='button' value='Submit'> <input type='reset' class='button'>
    </form>
  </div>
@stop
