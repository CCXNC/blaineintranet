<div class="card">
    <div class="card-header"><h4>EDIT 5S SHARE MY IDEA<a href="<?php echo base_url(); ?>fives/idea" class="btn btn-info float-right" style="margin-right:10px;">BACK</a></h4></div>
    <div class="card-body">
        <div style="color:red"><?php echo validation_errors(); ?> </div>
        <form method="post" action="<?php echo base_url(); ?>fives/idea_edit/<?php echo $idea->id; ?>/<?php echo $idea->control_number; ?>" enctype="multipart/form-data">
            <div class="card">
                <div class="card-header">My Idea</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Current</label>
                                <textarea type="text" class="form-control" name="current" rows="4" cols="50"><?php echo $idea->current; ?></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Proposal</label>
                                <textarea type="text" class="form-control" name="proposal" rows="4" cols="50"><?php echo $idea->proposal; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <input type="text" name="attachment_id" value="<?php echo $idea->attachment_id; ?>" hidden>
                                <p><?php echo $idea->attachment; ?></p>
                                <input type='file' name='data1' size='20' />
                            </div>
                        </div>
                    </div>    
                </div>    
            </div>       
            <br>
            <center>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" onclick="return confirm('Do you want to update data?');" value="UPDATE" >
                </div>
            </center>    
        </form>
    </div>
</div>
