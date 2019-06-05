<?php include_once('header.php'); ?>
<div class="container">
    <div class="card text-center">
      <div class="card-header">
        <h3>Project Details</h3>
        <p>Project ID: <?php echo $project->project_id;?></p>
        <ul class="nav nav-tabs card-header-tabs">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" id="info-tab" href="#home">Info</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" id="dates-tab" href="#dates">Dates</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" id="other-tab" href="#other">Other</a>
          </li>
        </ul>
      </div>
      <div class="card-body">
        <div class="tab-content">
          <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="info-tab">
            <p>Project Ref : <?php echo $project->project_ref;?></p>
            <p>Country ID : <?php echo $project->country_id;?></p>
            <p>Grant Amount : <?php echo $project->grant_amount;?></p>
          </div>
          <div class="tab-pane" id="dates" role="tabpanel" aria-labelledby="dates-tab">
            <p>Dates from GCF : <?php echo $project->dates_from_gcf;?></p>
            <p>Start Date : <?php echo $project->start_date;?></p>
            <p>End Date : <?php echo $project->end_date;?></p>
            <p>Duration : <?php echo $project->duration;?> months</p>
          </div>
          <div class="tab-pane" id="other" role="tabpanel" aria-labelledby="other-tab">
            <p>Readiness Type : <?php echo $project->readiness_type;?></p>
            <p>First Disbursment Amount : <?php echo $project->first_disbursment;?></p>
            <p>Status : <?php echo $project->status;?></p>
          </div>
        </div>
      </div>
      <div class="card-footer text-muted">
        <div class="form-group">
            <div class="col-md-10 col-md-offset-2">
                <?php echo anchor('welcome', 'Go Back', ['class'=>'btn btn default']);?>
            </div>
        </div>
      </div>
    </div>   
</div>     
<?php include_once('footer.php'); ?>