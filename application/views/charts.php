<?php include_once('header.php'); ?>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
        <script src="<?php echo base_url().'assets/js/jquery.min.js'?>"></script>
        <script src="<?php echo base_url().'assets/js/highcharts.js'?>"></script>
        <script src="<?php echo base_url().'assets/js/highcharts-3d.js'?>"></script>
        <script src="<?php echo base_url().'assets/js/highcharts-more.js'?>"></script>
        
        <h4>Project Funding Trends</h4>
        
        <div class="container-fluid my-5" id="graph">
        
        
        
        </div>
    <div>
    <?php echo anchor('welcome', 'Go Back', ['class'=>'btn btn-danger']);?>
    </div> 

<?php include_once('footer.php'); ?>