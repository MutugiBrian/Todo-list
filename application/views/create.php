<?php include_once('header.php'); ?>

    <div class="container">
        <?php echo form_open('welcome/save', ['class'=>'form form-horizontal']);?>
            <fieldset class="row d-flex my-3">
                <legend class="col-md-6 col-sm-10 col-xs-12 mx-auto">Add a New Project</legend>

                <!-- Project ID Field --> 
                <div class="col-md-6 col-sm-10 col-xs-12 mx-auto form-group">
                <label for="projectid">Project ID</label>
                <?php echo form_input(['name'=>'project_id', 'placeholder'=>'Enter a unique Project Identifier', 'class'=>'form-control']);?>
                <?php echo form_error('project_id', '<div class="text-danger">', '</div>');?>
                </div>
                
                <!-- Project Ref Field --> 
                <div class="col-md-6 col-sm-10 col-xs-12 mx-auto form-group">
                <label for="projectref">Project Ref.</label>
                <?php echo form_input(['name'=>'project_ref', 'placeholder'=>'Enter Project Ref', 'class'=>'form-control']);?>
                <?php echo form_error('project_ref', '<div class="text-danger">', '</div>');?>
                </div>

                <!-- Country ID Field --> 
                <div class="col-md-6 col-sm-10 col-xs-12 mx-auto form-group">
                <label for="countryid">Country ID</label>
                <?php echo form_input(['name'=>'country_id', 'placeholder'=>'Enter Country ID', 'class'=>'form-control']);?>
                <?php echo form_error('country_id', '<div class="text-danger">', '</div>');?>
                </div>
                    
                <!-- Form code ends --> 
                <div class="col-md-6 col-sm-10 col-xs-12 mx-auto form-group">
                <label class="control-label">Grant Amount</label>
                <?php echo form_input(['name'=>'grant_amount', 'placeholder'=>'Enter Grant Amount', 'class'=>'form-control']);?>
                <?php echo form_error('grant_amount', '<div class="text-danger">', '</div>');?>
                </div>

                <!-- Dates from GCF --> 
                <div class="col-md-6 col-sm-10 col-xs-12 mx-auto form-group">
                <label class="control-label" for="dates_from_gcf">Dates from GCF</label>
                <?php echo form_input(['name'=>'dates_from_gcf', 'placeholder'=>'YYYY/MM/DD', 'class'=>'form-control']);?>
                <?php echo form_error('dates_from_gcf', '<div class="text-danger">', '</div>');?>
                </div>

                <!-- Start Date --> 
                <div class="col-md-6 col-sm-10 col-xs-12 mx-auto form-group">
                <label class="control-label" for="start_date">Start Date</label>
                <?php echo form_input(['name'=>'start_date', 'placeholder'=>'YYYY/MM/DD', 'class'=>'form-control']);?>
                <?php echo form_error('start_date', '<div class="text-danger">', '</div>');?>
                </div>

                <!-- End Date -->
                <div class="col-md-6 col-sm-10 col-xs-12 mx-auto form-group">
                <label class="control-label" for="end_date">End Date</label>
                <?php echo form_input(['name'=>'end_date', 'placeholder'=>'YYYY/MM/DD', 'class'=>'form-control']);?>
                <?php echo form_error('end_date', '<div class="text-danger">', '</div>');?>
                </div>   

                <!-- Duration Field --> 
                <div class="col-md-6 col-sm-10 col-xs-12 mx-auto form-group">
                <label for="duration">Duration</label>
                <?php echo form_input(['name'=>'duration', 'placeholder'=>'Number of Months', 'class'=>'form-control']);?>
                <?php echo form_error('duration', '<div class="text-danger">', '</div>');?>
                </div>

                <!-- Readiness Type Field --> 
                <div class="col-md-6 col-sm-10 col-xs-12 mx-auto form-group">
                <label for="readiness_type">Readiness Type</label>
                <?php echo form_input(['name'=>'readiness_type', 'placeholder'=>'Readiness Type', 'class'=>'form-control']);?>
                <?php echo form_error('readiness_type', '<div class="text-danger">', '</div>');?>
                </div>

                <!-- First Disbursment Field --> 
                <div class="col-md-6 col-sm-10 col-xs-12 mx-auto form-group">
                <label class="control-label">First Disbursment</label>
                <?php echo form_input(['name'=>'first_disbursment', 'placeholder'=>'First Disbursment Amount', 'class'=>'form-control']);?>
                <?php echo form_error('first_disbursment', '<div class="text-danger">', '</div>');?>
                </div>

                <!-- Status Field --> 
                <div class="col-md-6 col-sm-10 col-xs-12 mx-auto form-group">
                <label for="status">Status</label>
                <?php echo form_input(['name'=>'status', 'placeholder'=>'Status', 'class'=>'form-control']);?>
                <?php echo form_error('status', '<div class="text-danger">', '</div>');?>
                </div>
        
                <div class="col-md-4 col-sm-10 col-xs-12 mx-auto d-flex form-group">
                    <!-- Submit Form --> 
                    <?php echo anchor('welcome', 'Go Back', ['class'=>'btn btn-danger ml-auto']);?>
                    <?php echo form_reset(['name'=>'reset', 'value'=>'Clear Form', 'class'=>'btn btn-warning mx-auto']);?>
                    <?php echo form_submit(['name'=>'submit', 'value'=>'Save', 'class'=>'btn btn-primary mr-auto']);?>
                </div>

                <!-- Test -->
                <div class="col-md-6 col-sm-10 col-xs-12 mx-auto form-group">
                <label for="test">Test</label>
                <select name="test" id="test" class="form-control" placeholder="Select readiness type">
                    <?php 
                        $db = mysqli_connect("localhost", "root", "", "projectmanager") or die("Couldn't connect");
                        $res = mysqli_query($db, "SELECT readiness_type FROM readiness_table") or die(mysqli_error($db));
                        while ($row = mysqli_fetch_row($res)):
                    ?>
                        <option value="<?=$row[0];?>"></option>
                    <?php endwhile; ?>
                </select>
                </div>  
            </fieldset>
        <?php echo form_close();?>
    </div>
<?php include_once('footer.php'); ?>