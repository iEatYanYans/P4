@extends('layouts.master')

@section('title')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/highcharts-more.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
@stop

@section('content')

<div id='graph-container'></div>
  <script src= '/js/tracker.js'></script>

@stop
