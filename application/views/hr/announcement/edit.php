<?php if($this->session->flashdata('success_msg')) : ?>
    <p class="alert alert-dismissable alert-success"><?php echo $this->session->flashdata('success_msg'); ?></p>
<?php endif; ?>
<div class="card">
    <div class="card-header"><h4>EDIT ANNOUNCEMENT</h4></div>
        <div class="card-body">
            <form method="post" action="<?php echo base_url(); ?>announcement/edit/<?php echo $announcement->id; ?>" >
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <center>
                                    <img src="<?php echo base_url(); ?>uploads/announcement/<?php echo $announcement->image ?>" alt="" style="width: 30%"><br><br>
                                </center>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <p>Image Type: jpg, png, jpeg</p>
                                <input type='file' name='image' size='20' />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" class="form-control" name="title" value="<?php echo $announcement->title; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Category</label>
                                <select class="form-control" name="category">
                                    <option value="">Select Category</option>
                                    <option value="loginpage" <?php echo $announcement->category == 'loginpage' ? 'selected' : ''; ?>>Login Page</option>
                                    <option value="homepage" <?php echo $announcement->category == 'homepage' ? 'selected' : ''; ?>>Homepage</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Content</label>
                                <textarea class="form-control" name="content" rows="4" cols="50"><?php echo $announcement->content; ?></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group" >
                                <input type="submit" class="btn btn-success float-right" onclick="return confirm('Do you want to update data?');" value="Update" >
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
