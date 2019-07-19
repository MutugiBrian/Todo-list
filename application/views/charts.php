<?php include_once('header.php'); ?>

    <h2>Project Funding Trends</h2>

        <div id="graph"></div>

        <script src="<?php echo base_url().'assets/js/jquery.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/js/highcharts.js'?>"></script>
        <script src="<?php echo base_url().'assets/js/highcharts-3d.js'?>"></script>
        <script src="<?php echo base_url().'assets/js/highcharts-more.js'?>"></script>
        <script type="text/javascript">
            jQuery (document).ready(function()
            {
                
            })
            //Morris.Bar({
            //element: 'graph',
            //data: <?php echo $data;?>,
            //xkey: 'project_ref',
            //ykeys: ['duration', 'grant_amount', 'status'],
            //labels: ['Duration', 'Grant Amount (in $)', 'Status']});
        </script>

    </div>
    <?php echo anchor('welcome', 'Go Back', ['class'=>'btn btn-danger']);?>
    </div> 

<?php include_once('footer.php'); ?>