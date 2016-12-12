@extends('layouts.master')

@section('content')
<h1> Record New Entry </h1><br>
<form method='POST' action='/store' name='entryform' class='form-data'>
    {{ csrf_field() }}
    <br>Time Slept: <br> <!--MAKE A POP UP CLOCK-->
      <!--<div class="input-group clockpicker">
          <input type="text" class="form-control" value="09:30">
          <span class="input-group-addon">
          <span class="glyphicon glyphicon-time"></span>
          </span>
      </div>
      <script type="text/javascript">
        $('.clockpicker').clockpicker();
      </script>-->
    <input type='datetime-local' name='time_slept' class='form-text' required><br>
      @if($errors -> get('time_slept'))
        <ul>
          @foreach ($errors->get('time_slept') as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      @endif

    <br>Time Woken:<br>
    <input type='datetime-local' name='time_woken' class='form-text' required><br>
    @if($errors -> get('time_woken'))
      <ul>
        @foreach ($errors->get('time_woken') as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    @endif

    <br> Temperature:
    <select name='temperature' class='form-text'>
      <option value='None'>N/A</option>
    <?php for ($i=1; $i<107; $i++):?>
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
    <input type='radio' name='temperature_constant' value='Fahrenheit' checked>Fahreheit<br>
    <input type='radio' name='temperature_constant' value='Celsius'> Celsius<br>
    <textarea rows='5' cols='50' placeholder="I dreamt..." form='entryform' class='form-text'></textarea><br>
    <input type='submit' value='Submit'> <input type='reset'>
</form>
@stop
