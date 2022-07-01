    $("#all").click(function(e){
     $.ajax({  
            url: 'http://cybercreations.in/prime/API/'+$(this).data("value"),  
            type: 'GET',  
            dataType: 'json',  
            success: function(res) {
                   var options = {
        series: [],
        chart: {
            height: 350,
            type: "area",
            toolbar: {
                show: !1
            }
        },
        colors: ["#556ee6", "#f1b44c"],
        dataLabels: {
            enabled: !1
        },
        stroke: {
            curve: "smooth",
            width: 2
        },
        fill: {
            type: "gradient",
            gradient: {
                shadeIntensity: 1,
                inverseColors: !1,
                opacityFrom: .45,
                opacityTo: .05,
                stops: [20, 100, 100, 100]
            }
        },
        markers: {
            size: 3,
            strokeWidth: 3,
            hover: {
                size: 4,
                sizeOffset: 2
            }
        },
        legend: {
            position: "top",
            horizontalAlign: "right"
        }
    };
            chart = new ApexCharts(document.querySelector("#area-chart"), options);
            chart.render();
                console.log(res);  
                chart.updateSeries([{
                  data: res
                }])
            },  
            error: function(xhr, textStatus, errorThrown) {  
                console.log('Error in Database');  
            }  
        });  

    }); 

 
    $("#month").click(function(e){
        
     $.ajax({  
            url: 'http://cybercreations.in/prime/API/'+$(this).data("value"),  
            type: 'GET',  
            dataType: 'json',  
            success: function(res) {  
                var options = {
        series: [],
        chart: {
            height: 350,
            type: "area",
            toolbar: {
                show: !1
            }
        },
        colors: ["#556ee6", "#f1b44c"],
        dataLabels: {
            enabled: !1
        },
        stroke: {
            curve: "smooth",
            width: 2
        },
        fill: {
            type: "gradient",
            gradient: {
                shadeIntensity: 1,
                inverseColors: !1,
                opacityFrom: .45,
                opacityTo: .05,
                stops: [20, 100, 100, 100]
            }
        },
        
        markers: {
            size: 3,
            strokeWidth: 3,
            hover: {
                size: 4,
                sizeOffset: 2
            }
        },
        legend: {
            position: "top",
            horizontalAlign: "right"
        }
    },
     chart = new ApexCharts(document.querySelector("#area-chart"), options);
    chart.render();
                console.log(res);  
                chart.updateSeries([{
  data: res
}])
            },  
            error: function(xhr, textStatus, errorThrown) {  
                console.log('Error in Database');  
            }  
        });  

    }); 
    
    
    $("#six_month").click(function(e){
        
     $.ajax({  
            url: 'http://cybercreations.in/prime/API/'+$(this).data("value"),  
            type: 'GET',  
            dataType: 'json',  
            success: function(res) {  
                var options = {
        series: [],
        chart: {
            height: 350,
            type: "area",
            toolbar: {
                show: !1
            }
        },
        colors: ["#556ee6", "#f1b44c"],
        dataLabels: {
            enabled: !1
        },
        stroke: {
            curve: "smooth",
            width: 2
        },
        fill: {
            type: "gradient",
            gradient: {
                shadeIntensity: 1,
                inverseColors: !1,
                opacityFrom: .45,
                opacityTo: .05,
                stops: [20, 100, 100, 100]
            }
        },
        
        markers: {
            size: 3,
            strokeWidth: 3,
            hover: {
                size: 4,
                sizeOffset: 2
            }
        },
        legend: {
            position: "top",
            horizontalAlign: "right"
        }
    },
     chart = new ApexCharts(document.querySelector("#area-chart"), options);
    chart.render();
                console.log(res);  
                chart.updateSeries([{
  data: res
}])
            },  
            error: function(xhr, textStatus, errorThrown) {  
                console.log('Error in Database');  
            }  
        });  

    }); 
    
    
    $("#year").click(function(e){
        
     $.ajax({  
            url: 'http://cybercreations.in/prime/API/'+$(this).data("value"),  
            type: 'GET',  
            dataType: 'json',  
            success: function(res) {  
                var options = {
        series: [],
        chart: {
            height: 350,
            type: "area",
            toolbar: {
                show: !1
            }
        },
        colors: ["#556ee6", "#f1b44c"],
        dataLabels: {
            enabled: !1
        },
        stroke: {
            curve: "smooth",
            width: 2
        },
        fill: {
            type: "gradient",
            gradient: {
                shadeIntensity: 1,
                inverseColors: !1,
                opacityFrom: .45,
                opacityTo: .05,
                stops: [20, 100, 100, 100]
            }
        },
        
        markers: {
            size: 3,
            strokeWidth: 3,
            hover: {
                size: 4,
                sizeOffset: 2
            }
        },
        legend: {
            position: "top",
            horizontalAlign: "right"
        }
    },
     chart = new ApexCharts(document.querySelector("#area-chart"), options);
    chart.render();
                console.log(res);  
                chart.updateSeries([{
  data: res
}])
            },  
            error: function(xhr, textStatus, errorThrown) {  
                console.log('Error in Database');  
            }  
        });  

    }); 
    
    
    
    
    
    
     var option = {
        series: [],
        chart: {
            height: 350,
            type: "area",
            toolbar: {
                show: !1
            }
        },
        colors: ["#556ee6", "#f1b44c"],
        dataLabels: {
            enabled: !1
        },
        stroke: {
            curve: "smooth",
            width: 2
        },
        fill: {
            type: "gradient",
            gradient: {
                shadeIntensity: 1,
                inverseColors: !1,
                opacityFrom: .45,
                opacityTo: .05,
                stops: [20, 100, 100, 100]
            }
        },
        
        markers: {
            size: 3,
            strokeWidth: 3,
            hover: {
                size: 4,
                sizeOffset: 2
            }
        },
        legend: {
            position: "top",
            horizontalAlign: "right"
        }
    },
     chart = new ApexCharts(document.querySelector("#area-chart"), option);
    chart.render();
var url = 'http://cybercreations.in/prime/API/all';

$.getJSON(url, function(response) {
  chart.updateSeries([{
    name: 'Sales',
    data: response
  }])
});
