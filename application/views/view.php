<?php include_once('header.php'); ?>
<div class="container">
    <div class="card text-center mt-5">
        <div class="card-header">
            <h3>Project Details</h3>
            <p>Project ID: <?php echo $project->project_id;?></p>
            <ul class="nav nav-pills card-header-tabs">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="pill" id="info-tab" href="#home">Summary</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="pill" id="dates-tab" href="#dates">Dates</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="pill" id="other-tab" href="#other">Status</a>
              </li>
            </ul>
          </div>
          <div class="card-body">
            <div class="tab-content">
              <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="info-tab">
                <p>Project Ref : <?php echo $project->project_ref;?></p>
                <p>Country ID : <?php echo $project->country_id;?></p>
                <p>Grant Amount (in $): <?php echo $project->grant_amount;?></p>
              </div>
              <div class="tab-pane" id="dates" role="tabpanel" aria-labelledby="dates-tab">
                <p>Dates from GCF : <?php echo $project->dates_from_gcf;?></p>
                <p>Start Date : <?php echo $project->start_date;?></p>
                <p>End Date : <?php echo $project->end_date;?></p>
                <p>Duration : <?php echo $project->duration;?> months</p>
              </div>
              <div class="tab-pane" id="other" role="tabpanel" aria-labelledby="other-tab">
                <p>Readiness Type : <?php echo $project->readiness_type;?></p>
                <p>First Disbursment Amount (in $): <?php echo $project->first_disbursment;?></p>
                <p class="text-capitalize">Status : <?php echo $project->status;?></p>
              </div>
            </div>
        </div>
        <div class="card-footer text-muted">
            <a class='btn btn-primary' href="<?php echo $_SERVER['PHP_SELF']?>?format=json">Load JSON</a>
            <?php echo anchor('welcome', 'Go Back', ['class'=>'btn btn-danger']);?>
        </div>
      </div>
    </div> 
</div>     
<?php include_once('footer.php'); ?>