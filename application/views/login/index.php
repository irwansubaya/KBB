<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Admin // Index</title>
    <link href="<?php echo base_url();?>static/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url();?>static/css/bootstrap-responsive.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body>
<?php echo form_open();?>

<div class="container">
    <div id="" class="row">
        <div id="" class="span5 offset3">
            <br /><br /><br />
            <legend>Form Login</legend>
            <?php echo view_errors();?>
            <?php echo form_text('Username','username','','autocomplete="off"');?>
            <?php echo form_pass('Password','password','','autocomplete="off"');?>

            <div class="form-actions">
                <button name="submit" type="submit" class="btn btn-primary">Login</button>
            </div>
        </div><!-- / -->
    </div><!-- / -->
</div>
<?php echo form_close();?>
</body>
</html>