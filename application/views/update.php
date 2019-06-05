<?php include_once('header.php'); ?>

    <div class="container">
        <?php echo form_open("welcome/change/{$project->project_id}", ['class'=>'form-horizontal']);?>
            <fieldset>
                <legend>Edit Existing Project Details</legend>
                <!-- Project ID Field --> 
                <div class="container-fluid">
                <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                <label for="projectid">Project ID</label>
                <?php echo form_input(['name'=>'project_id', 'placeholder'=>'Enter a unique Project Identifier', 'class'=>'form-control', 'value'=>set_value('project_id', $project->project_id)]);?>
                <?php echo form_error('project_id', '<div class="text-danger">', '</div>');?>
                </div>
                </div>    
                </div>
                
                <!-- Project Ref Field --> 
                <div class="container-fluid">
                <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                <label for="projectref">Project Ref.</label>
                <?php echo form_input(['name'=>'project_ref', 'placeholder'=>'Enter Project Ref', 'class'=>'form-control', 'value'=>set_value('project_ref', $project->project_ref)]);?>
                <?php echo form_error('project_ref', '<div class="text-danger">', '</div>');?>
                </div>
                </div>    
                </div>

                <!-- Country ID Field --> 
                <div class="container-fluid">
                <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                <label for="countryid">Country ID</label>
                <?php echo form_input(['name'=>'country_id', 'placeholder'=>'Enter Country ID', 'class'=>'form-control', 'value'=>set_value('country_id', $project->country_id)]);?>
                <?php echo form_error('country_id', '<div class="text-danger">', '</div>');?>
                </div>
                </div>    
                </div>
                    
                <!-- Grant Amount Field --> 
                <div class="container-fluid">
                <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                <label class="control-label">Grant Amount</label>
                <?php echo form_input(['name'=>'grant_amount', 'placeholder'=>'Enter Grant Amount', 'class'=>'form-control', 'value'=>set_value('grant_amount', $project->grant_amount)]);?>
                <?php echo form_error('grant_amount', '<div class="text-danger">', '</div>');?>
                </div>
                </div>    
                </div> 

                <!-- Dates from GCF --> 
                <div class="container-fluid">
                <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                <label class="control-label" for="dates_from_gcf">Dates from GCF</label>
                <?php echo form_input(['name'=>'dates_from_gcf', 'placeholder'=>'YYYY/MM/DD', 'class'=>'form-control', 'value'=>set_value('dates_from_gcf', $project->dates_from_gcf)]);?>
                <?php echo form_error('dates_from_gcf', '<div class="text-danger">', '</div>');?>
                </div>
                </div>    
                </div>

                <!-- Start Date --> 
                <div class="container-fluid">
                <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                <label class="control-label" for="start_date">Start Date</label>
                <?php echo form_input(['name'=>'start_date', 'placeholder'=>'YYYY/MM/DD', 'class'=>'form-control', 'value'=>set_value('start_date', $project->start_date)]);?>
                <?php echo form_error('start_date', '<div class="text-danger">', '</div>');?>
                </div>
                </div>    
                </div>

                <!-- End Date --> 
                <div class="container-fluid">
                <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                <label class="control-label" for="end_date">End Date</label>
                <?php echo form_input(['name'=>'end_date', 'placeholder'=>'YYYY/MM/DD', 'class'=>'form-control', 'value'=>set_value('end_date', $project->end_date)]);?>
                <?php echo form_error('end_date', '<div class="text-danger">', '</div>');?>
                </div>
                </div>    
                </div>

                <!-- Duration Field --> 
                <div class="container-fluid">
                <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                <label for="duration">Duration</label>
                <?php echo form_input(['name'=>'duration', 'placeholder'=>'Number of Months', 'class'=>'form-control', 'value'=>set_value('duration', $project->duration)]);?>
                <?php echo form_error('duration', '<div class="text-danger">', '</div>');?>
                </div>
                </div>    
                </div>

                <!-- Readiness Type Field --> 
                <div class="container-fluid">
                <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                <label for="readiness_type">Readiness Type</label>
                <?php echo form_input(['name'=>'readiness_type', 'placeholder'=>'Readiness Type', 'class'=>'form-control', 'value'=>set_value('readiness_type', $project->readiness_type)]);?>
                <?php echo form_error('readiness_type', '<div class="text-danger">', '</div>');?>
                </div>
                </div>    
                </div>

                <!-- First Disbursment Field --> 
                <div class="container-fluid">
                <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                <label class="control-label">First Disbursment</label>
                <?php echo form_input(['name'=>'first_disbursment', 'placeholder'=>'First Disbursment Amount', 'class'=>'form-control', 'value'=>set_value('first_disbursment', $project->first_disbursment)]);?>
                <?php echo form_error('first_disbursment', '<div class="text-danger">', '</div>');?>
                </div>
                </div>    
                </div>

                <!-- Status Field --> 
                <div class="container-fluid">
                <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                <label for="status">Status</label>
                <?php echo form_input(['name'=>'status', 'placeholder'=>'Status', 'class'=>'form-control', 'value'=>set_value('status', $project->status)]);?>
                <?php echo form_error('status', '<div class="text-danger">', '</div>');?>
                </div>
                </div>    
                </div>
                
                <div class="form-group">
                <div class="col-md-10 col-md-offset-2">
                    <!-- Submit Form --> 
                    <button type="reset" class="btn btn-primary">Clear Form</button>
                    <!-- Submit Form --> 
                    <?php echo form_submit(['name'=>'submit', 'value'=>'Update', 'class'=>'btn btn default']);?>
                    <?php echo anchor('welcome', 'Go Back', ['class'=>'btn btn default']);?>
                </div>
                </div>
            </fieldset>
        <?php echo form_close();?>
    </div>
<?php include_once('footer.php'); ?>