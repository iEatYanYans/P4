@extends('layouts.master')

@section('content')
  <div class='content'>
    <h2> Update Entry {{$entry->id}}</h2>
    <form method='POST' action='/edit/{{$entry->id}}' name='entryform' class='form-data'>
        {{ csrf_field() }}
        <input type='hidden' name = 'id' value='{{$entry->id}}'>
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
        <input type='datetime-local' name='time_slept' class='form-text' value = '<?php echo date("Y-m-d\TH:i:s", strtotime($entry->time_slept)) ;?>' required><br>
          @if($errors -> get('time_slept'))
            <ul>
              @foreach ($errors->get('time_slept') as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          @endif

        <br>Time Woken:<br>
        <input type='datetime-local' name='time_woken' class='form-text' value='<?php echo date("Y-m-d\TH:i:s", strtotime($entry->time_woken)) ;?>' required><br>
        @if($errors -> get('time_woken'))
          <ul>
            @foreach ($errors->get('time_woken') as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        @endif

        <br> Temperature:
        <select name='temperature' class='form-text'>
          <option value='{{$entry->room_temperature}}'>{{$entry->room_temperature}}</option>
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
        <input type='radio' name='temperature_constant' value='Fahrenheit' <?php if($entry->temperature_constant == 'Fahrenheit'): echo 'checked'; endif;?>> Fahrenheit<br>
        <input type='radio' name='temperature_constant' value='Celsius' <?php if($entry->temperature_constant == 'Celsius'): echo 'checked'; endif;?>> Celsius<br>
        <textarea name='notes' id='note' rows='5' cols='50' class='form-text'>{{$entry->notes}}</textarea><br>

        @foreach($tags_for_checkbox as $tag_id => $tag_name)
          <input type ='checkbox'
          value='{{$tag_id}}'
          name='tags[]'
          {{ (in_array($tag_name, $tags_for_entry)) ? 'CHECKED' : ''}}
          > {{$tag_name}} <br>
        @endforeach

        <input type='submit' class='button' value='Submit'> <input type='reset' class='button'>
    </form>
  </div>
@stop
