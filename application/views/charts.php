<?php include_once('header.php'); ?>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script src="<?php echo base_url().'assets/js/jquery.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/js/highcharts.js'?>"></script>
        <script src="<?php echo base_url().'assets/js/highcharts-3d.js'?>"></script>
        <script src="<?php echo base_url().'assets/js/highcharts-more.js'?>"></script>
        <div class="container-fluid my-5" id="graph">
        <h4>Project Funding Trends</h4>
        <script type="text/javascript">
        var chart1;
        jQuery(doument).ready(function()
        {
            chart1 = new Highcharts.Chart({
                chart: {
                    rednderTo: 'container',
                    type: 'bar'
                },
                title: {
                    text: 'Project Funding'
                },
                xAxis: {
                    categories: ['Project 1', 'Project 2', 'Project 3']
                },
                yAxis: {
                    title: {
                        text: 'Funding Cost'
                    }
                },
                series: [{
                    name: 'CSD',
                    data: [1000,5000,10000]
                },{
                    name: 'Law',
                    data: [2000,4000,8000]
                }]
            })
        })
        </script>
        </div>
    </div>
    <?php echo anchor('welcome', 'Go Back', ['class'=>'btn btn-danger']);?>
    </div> 

<?php include_once('footer.php'); ?>