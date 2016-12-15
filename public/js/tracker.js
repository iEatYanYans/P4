$(document).ready(function(){
  var title = {
    text: 'Hours Slept Per Night '
  };

  var subtitle = {
    text: ''
  };

  var xAxis= {
    categories: [
      '12/12/16', '12/13/16','12/14/16', '12/15/16',
    ]};

  var yAxis= {
    title:{
      text: 'Time in hours'
    },
    plotLines:[{
      value:0,
      width:1,
      color:'#808080'
    }]
  };

  var tooltip = {
    valueSuffix: ''
  }

  var legend= {
    layout: 'vertical',
    align:'right',
    verticalAlign:'middle',
    borderWidth:0
  };

  var series= [
    {
      name:'Yan',
      data:[5, 4, 6.7, 8]
    },
    {
      name:'Kirk',
      data: [7, 5.3, 8.9, 10]
    }
  ];

  var json= {};

  json.title=title;
  json.subtitle= subtitle;
  json.xAxis = xAxis;
  json.yAxis = yAxis;
  json.lengend = legend;
  json.series = series;

  $('#graph-container').highcharts(json);
});
