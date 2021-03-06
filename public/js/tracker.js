function showGraph(time_woken_data, hours_slept, user_name){
    $(document).ready(function(){
      var chart ={
        type: 'area'
      };

      var title = {
        text: 'Hours Slept Per Night '
      };

      var subtitle = {
        text: ''
      };

      var xAxis= {
        categories: time_woken_data
      };

      var yAxis= {
        className: 'highcharts-color-0',
        title:{
          text: 'Time in hours'
        },
        plotLines:[{
          value:0,
          width:1,
          color:'#ffffff'
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
          name: user_name,
          data: hours_slept
        },
      ];

      var json= {};

      json.chart= chart;
      json.title=title;
      json.subtitle= subtitle;
      json.xAxis = xAxis;
      json.yAxis = yAxis;
      json.lengend = legend;
      json.series = series;

      $('#graph-container').highcharts(json);
    })
}

function accordionToggle(x){
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
}

function confirmDel(x){

      var confirmation = confirm("WARNING: All entries will be deleted");

      if (confirmation == true){
        window.location = '/delete/all';
      }
      else{
        alert("Entries not deleted");
      };
}

function entryError(){
  alert("NO ENTRIES FOUND");
}
