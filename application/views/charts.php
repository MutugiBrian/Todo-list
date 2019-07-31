<?php include_once('header.php'); ?>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <!-- <script src="<?php echo base_url().'assets/js/jquery-3.4.1.min.js'?>"></script> -->
        <script src="<?php echo base_url().'assets/js/highcharts.js'?>"></script>
        <script src="<?php echo base_url().'assets/js/highcharts-3d.js'?>"></script>
        <script src="<?php echo base_url().'assets/js/highcharts-more.js'?>"></script>
        
        <h4>Project Funding Trends</h4>
        
        <div class="container-fluid my-5" id="graph">
        <div id="container" style="width: 75%;">
		<canvas id="canvas"></canvas>
	    </div>
<script>
		var ctx = document.getElementById('canvas').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
        datasets: [{
            label: '# of Votes',
            data:[12, 19, 3, 5, 2, 3],
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
	</script>        
        
        
        </div>
    <div>
    <?php echo anchor('welcome', 'Go Back', ['class'=>'btn btn-danger']);?>
    </div> 

<?php include_once('footer.php'); ?>