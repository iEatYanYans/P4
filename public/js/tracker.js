function showGraph(time_woken_data, hours_slept){
    $(document).ready(function(){


      var title = {
        text: 'Hours Slept Per Night '
      };

      var subtitle = {
        text: ''
      };

      var xAxis= {
        categories: time_woken_data};

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
          data: hours_slept
        },
      ];

      var json= {};

      json.title=title;
      json.subtitle= subtitle;
      json.xAxis = xAxis;
      json.yAxis = yAxis;
      json.lengend = legend;
      json.series = series;

      $('#graph-container').highcharts(json);
    })
}
