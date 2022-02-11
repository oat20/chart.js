<?php
$data = array(10,
						20,
						30,
						40,
						50,);
$label = array('Red',
					'Orange',
					'Yellow',
					'Green',
					'Blue');
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>ChartJs</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body>
<div class="container-fluid">

	<h1 class="my-3">ChartJS</h1>
    
    <div class="row">
    
    	<div class="col-lg-6">
        	<div class="card mb-3">
            	<div class="card-header">Bar Chart</div>
                <div class="card-body">
        			<canvas id="myChart"></canvas>
            	</div>
            </div>
            
            <div class="card mb-3">
            	<div class="card-header">Pie Chart</div>
                <div class="card-body">
        			<canvas id="pie"></canvas>
            	</div>
            </div>
        </div>
        <!--col-->
        
        <div class="col-lg-6">
        	<div class="card mb-3">
            	<div class="card-header">Line Chart</div>
                <div class="card-body">
        			<canvas id="linechart"></canvas>
            	</div>
            </div>
			
			<div class="card mb-3">
            	<div class="card-header">Covid-19</div>
                <div class="card-body">
        			<canvas id="covid19"></canvas>
            	</div>
            </div>
        </div>
		    
    </div>
    <!--row-->
    

</div><!--con-->

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var ctx = document.getElementById('linechart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'line',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data: [12, 19, 3, 5, 2, 3],
            backgroundColor: [
                'rgba(255, 255, 255, 0)',
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                //'rgba(54, 162, 235, 1)',
                //'rgba(255, 206, 86, 1)',
                //'rgba(75, 192, 192, 1)',
                //'rgba(153, 102, 255, 1)',
                //'rgba(255, 159, 64, 1)'
            ],
            //borderWidth: 1
        },{
			label: 'Line 2',
			data: [3,2,5,3,19,12],
			borderColor: [
				'rgba(54, 162, 235, 1)'
			],
			backgroundColor: [ 'rgba(255, 255, 255, 0)']
		}]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});

var ctx = document.getElementById('pie').getContext('2d');
var myChart = new Chart(ctx, {
			type: 'pie',
			data: {
				datasets: [{
					data: [
						10,
						20,
						30,
						40,
						50,
					],
					backgroundColor: [
						'rgba(255, 99, 132, 1)',
                		'rgba(54, 162, 235, 1)',
                		'rgba(255, 206, 86, 1)',
                		'rgba(75, 192, 192, 1)',
                		'rgba(153, 102, 255, 1)',
					],
					label: 'Dataset 1'
				}],
				labels: [
					'Red',
					'Orange',
					'Yellow',
					'Green',
					'Blue'
				]
			},
			options: {
				responsive: true
			}
			});
			
			var ctx = document.getElementById('covid19').getContext('2d');
var myChart = new Chart(ctx, {
			type: 'pie',
			data: {
				datasets: [{
					/*data: [
						10,
						20,
						30,
						40,
						50,
					],*/
					data: <?php print json_encode($data);?>,
					backgroundColor: [
						'rgba(255, 99, 132, 1)',
                		'rgba(54, 162, 235, 1)',
                		'rgba(255, 206, 86, 1)',
                		'rgba(75, 192, 192, 1)',
                		'rgba(153, 102, 255, 1)',
					],
					label: 'Dataset 1'
				}],
				/*labels: [
					'Red',
					'Orange',
					'Yellow',
					'Green',
					'Blue'
				]*/
				labels: <?php print json_encode($label);?>,
			},
			options: {
				responsive: true
			}
});
</script>
</body>
</html>
