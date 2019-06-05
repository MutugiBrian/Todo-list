<?php include_once('header.php'); ?>
  <div class="container my-5">
    <h3>Projects</h3>
    <?php if($msg = $this->session->flashdata('msg')):?>
        <?php $color = ($msg == 'Project Deleted Successfully')?'success':'danger'; ?>
        <div class="alert alert-<?=$color;?> alert-dismissible fade show close alert-close">
          <?php echo $msg; ?>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
    <?php endif;?> 
    <?php echo anchor('welcome/create', 'Add New Project', ['class'=>'btn btn-primary']);?>
    <div class="mt-3  table-responsive">
    <table id="project_table" class="table table-borderless table-hover">
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
      <?php if(isset($projects)): ?>
        <?php foreach($projects as $project): ?>
          <tr>
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
              <?php echo anchor("welcome/view/{$project->project_id}", '<i class="fas fa-eye"></i>', ['class'=>'text-primary']);?>
              <?php echo anchor("welcome/update/{$project->project_id}", '<i class="fas fa-edit"></i>', ['class'=>'text-success']);?>
              <?php echo anchor("welcome/delete/{$project->project_id}", '<i class="fas fa-trash-alt"></i>', ['class'=>'text-danger']);?>
            </td>
          </tr>
          <?php endforeach; ?>
        <?php else: ?>  
          <tr>
            <td>No Records Found.</td>
          </tr>
        <?php endif;?>
      </tbody>
    </table> 
    </div>
    </div>
    <script type="text/javascript">
      $(document).ready(function() {
      $('#project_table').DataTable();});
  </script>
<?php include_once('footer.php'); ?>