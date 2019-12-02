<div class="container">
    <div class="row">
        <!--Blog Roll Content-->

        <div class="col-md-8 blog-post">

            <form action="" method="post" class="form-horizontal">
                <fieldset>

                    <!-- Form Name -->
                    <legend>Please log in!</legend>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Email</label>
                        <div class="col-md-5">
                            <input type="text" name="email" placeholder="Enter your email" class="form-control" value="<?php echo isset($formData['email']) ? htmlspecialchars($formData['email']) : ""; ?>">

                        </div>
                        <div class="col-md-4">
                            <?php if (!empty($formErrors['email'])) { ?>
                                <?php foreach ($formErrors['email'] as $errorMessage) { ?>
                                    <div class="text-danger"><?php echo $errorMessage; ?></div>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Password</label>
                        <div class="col-md-5">
                            <input type="password" name="password" placeholder="Enter your password" class="form-control" value="">
                        </div>
                        <div class="col-md-4">
                            <?php if (!empty($formErrors['password'])) { ?>
                                <?php foreach ($formErrors['password'] as $errorMessage) { ?>
                                    <div class="text-danger"><?php echo $errorMessage; ?></div>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>

                </fieldset>
                <fieldset>
                    <legend></legend>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-default">Login</button>
                    </div>
                </fieldset>
            </form>



        </div>
        <!--Sidebar-->
        <div class="col-md-4 sidebar sidebar-right">
            <div class="inner">
                <div class="block">
                    <a href="#" class="btn btn-block btn-info"><i class="fa fa-download"></i> Download Our Press Kit</a>
                    <a href="#" class="btn btn-block btn-success"><i class="fa fa-envelope-o"></i> Get In Touch</a>
                    <a href="#" class="btn btn-block btn-warning"><i class="fa fa-rss"></i> Subscribe via RSS feed</a>
                </div>
            </div>
        </div>
    </div>
</div>