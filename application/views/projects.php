<?php include_once('header.php'); ?>
  <div class="container">
    <h4>Projects Table</h4> 
    <?php echo anchor('welcome/create', 'Add New Project', ['class'=>'btn btn-primary']);?>
    <?php echo anchor('welcome/loadall', 'Load JSON', ['class'=>'btn btn-default']);?>
    <table class="table table-hover">
      <thead>
        <tr>
          <th scope="col">Project ID</th>
          <th scope="col">Project Ref</th>
          <th scope="col">Country ID</th>
          <th scope="col">Grant Amount</th>
          <th scope="col">Dates from GCF</th>
          <th scope="col">Start Date</th>
          <th scope="col">End Date</th>
          <th scope="col">Duration</th>
          <th scope="col">Readiness Type</th>
          <th scope="col">First Disbursment</th>
          <th scope="col">Status</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
      <?php if(count($projects)): ?>
        <?php foreach($projects as $project): ?>
          <tr class="table-active">
            <th scope="row"><?php echo $project->project_id;?></th>
            <td><?php echo $project->project_ref;?></td>
            <td><?php echo $project->country_id;?></td>
            <td><?php echo $project->grant_amount;?></td>
            <td><?php echo $project->dates_from_gcf;?></td>
            <td><?php echo $project->start_date;?></td>
            <td><?php echo $project->end_date;?></td>
            <td><?php echo $project->duration;?></td>
            <td><?php echo $project->readiness_type;?></td>
            <td><?php echo $project->first_disbursment;?></td>
            <td><?php echo $project->status;?></td>
            <td>
            <?php echo anchor('welcome/view', 'View', ['class'=>'badge badge-primary']);?>
            <?php echo anchor('welcome/update', 'Update', ['class'=>'badge badge-success']);?>
            <?php echo anchor('welcome/delete', 'Delete', ['class'=>'badge badge-danger']);?>
            </td>
          </tr>
          <?php endforeach; ?>
            <?php else: ?>  
            <tr>
              <tr>No Records Found.</td>
            </tr>
          <?php endif;?>
      </tbody>
    </table> 
    </div>
<?php include_once('footer.php'); ?>