<div class="container">
    <div class="row">
        <!--Blog Roll Content-->

        <div class="col-md-8 blog-post">

            <form action="" method="post" class="form-horizontal">
                <fieldset>

                    <!-- Form Name -->
                    <legend>Find out more about yourself from our horoscope</legend>

                    <!-- Day of birth -->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="textinput">Day Of birth</label>
                        <div class="col-md-5">
                            <select name="day" class="form-control">
                                <option value="">-- Select day of birth --</option>
                                <?php for ($day = 1; $day <= 31; $day++) { ?>
                                    <option value="<?php echo htmlspecialchars($day); ?>" <?php if (isset($formData['day']) && $formData['day'] == $day) { ?> selected="selected" <?php } ?>><?php echo htmlspecialchars($day); ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <?php if (!empty($formErrors['day'])) { ?>
                                <?php foreach ($formErrors['day'] as $errorMessage) { ?>
                                    <div class="text-danger"><?php echo $errorMessage; ?></div>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>

                    <!-- Month of birth -->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="textinput">Month Of birth</label>
                        <div class="col-md-5">
                            <select name="month" class="form-control">
                                <option value="">-- Select month of birth --</option>
                                <?php foreach ($posibleMonth as $monthNumber => $monthName) { ?>
                                    <option value="<?php echo htmlspecialchars($monthNumber); ?>" <?php if (isset($formData['month']) && $formData['month'] == $monthNumber) { ?> selected="selected" <?php } ?>><?php echo htmlspecialchars($monthName); ?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <?php if (!empty($formErrors['month'])) { ?>
                                <?php foreach ($formErrors['month'] as $errorMessage) { ?>
                                    <div class="text-danger"><?php echo $errorMessage; ?></div>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                    <!-- Text input-->
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="textinput">Year of birth</label>
                        <div class="col-md-5">
                            <input type="text" name="year" value="<?php echo isset($formData['year']) ? htmlspecialchars($formData['year']) : ""; ?>" placeholder="Enter year of birth" class="form-control">
                        </div>
                        <div class="col-md-4">
                            <?php if (!empty($formErrors['year'])) { ?>
                                <?php foreach ($formErrors['year'] as $errorMessage) { ?>
                                    <div class="text-danger"><?php echo $errorMessage; ?></div>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </div>
                </fieldset>
                <fieldset>
                    <legend></legend>
                    <div class="form-group text-right">
                        <button type="submit" class="btn btn-default">Check</button>
                    </div>
                </fieldset>
            </form>
            <h2 class="text-success"><?php echo htmlspecialchars($systemMessage); ?></h2> 
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