<?php include_once('header.php'); ?>
    <div class="container">

    <h3>Project Details</h3>
        <p><?php echo $project->project_id;?></p>
        <p>Project Ref : <?php echo $project->project_ref;?></p>
        <p>Country ID : <?php echo $project->country_id;?></p>
        <p>Grant Amount : <?php echo $project->grant_amount;?></p>
        <p>Dates from GCF : <?php echo $project->dates_from_gcf;?></p>
        <p>Start Date : <?php echo $project->start_date;?></p>
        <p>End Date : <?php echo $project->end_date;?></p>
        <p>Duration : <?php echo $project->duration;?></p>
        <p>Readiness Type : <?php echo $project->readiness_type;?></p>
        <p>First Disbursment Amount : <?php echo $project->first_disbursment;?></p>
        <p>Status : <?php echo $project->status;?></p>
        <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
                <?php echo anchor('welcome', 'Go Back', ['class'=>'btn btn default']);?>
            </div>
        </div>
    </div>  
    
<?php include_once('footer.php'); ?>