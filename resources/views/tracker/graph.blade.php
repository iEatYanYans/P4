@extends('layouts.master')

@section('title')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
@stop

@section('content')

<div id='graph-container'></div>

  <script>
  var time_woken_data = <?php echo json_encode($time_woken_data);?>;
  var hours_slept= <?php echo json_encode($hours_slept);?>;
  var user_name= <?php echo json_encode($user->first_name);?>;

  showGraph(time_woken_data, hours_slept, user_name)
  </script>
@stop
