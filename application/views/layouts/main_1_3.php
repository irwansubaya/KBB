<?php require_once('navigation.php'); ?>
<!DOCTYPE html>
<!-- Created by : Neki Arismi neki.arismi@gmail.com 0856 874 5318  -->
<html>
<head>
	<meta charset="UTF-8" />
	<?php echo $meta_tags; ?>
	<title><?php echo $title; ?></title>
	<?php echo $stylesheets; ?>
	<?php echo $javascripts; ?>
</head>
<body>

    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="<?php echo base_url()?>">KBB</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li<?php echo ($this->uri->segment(1) == 'admin')?' class="active"':''?>><a href="<?php echo base_url()."admin/admin" ?>">Admin</a></li>
              <li<?php echo ($this->uri->segment(1) == 'customer')?' class="active"':''?>><a href="<?php echo base_url()."customer/customer" ?>">Customer</a></li>
	      <li<?php echo ($this->uri->segment(1) == 'schedule')?' class="active"':''?>><a href="<?php echo base_url()."schedule/schedule" ?>">schedule</a></li>
	      <li<?php echo ($this->uri->segment(1) == 'report')?' class="active"':''?>><a href="<?php echo base_url()."report/report" ?>">Report</a></li>
	      <!--<li<?php echo ($this->uri->segment(1) == 'report_next')?' class="active"':''?>><a href="<?php echo base_url()."report/report_next" ?>">Report Next</a></li>
	      <li<?php echo ($this->uri->segment(1) == 'report_tiga')?' class="active"':''?>><a href="<?php echo base_url()."report/report_tiga" ?>">Report H+3</a></li>-->
	    </ul>
            <p class="navbar-text pull-right">Logged in as <a href="#">xxx</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
	<div class="span12" style="height: 50px;"></div>
      </div>
      <div class="row">
        <div class="span2">
          <div class="well" style="padding: 8px 0;">
            <ul class="nav nav-list">
<?php foreach ($nav as $key => $val):?>
    <?php if ($this->uri->segment(1) === $key):?>
	<?php foreach ($val as $menu_h => $val2):?>
	      <li class="nav-header"><?php echo $menu_h ?></li>
	    <?php
	    foreach ($val2 as $key2 => $menu_c):
	    $menu_c = explode("::", $menu_c);
	    ?>
	      <?php if (in_array($this->uri->segment(2).'/'.$this->uri->segment(3), $menu_c)):?>
	      <li class="active"><?php echo anchor($this->uri->segment(1).'/'.$menu_c[1],$menu_c[0])?></li>
	      <?php else:?>
	      <li><?php echo anchor($this->uri->segment(1).'/'.$menu_c[1],$menu_c[0])?></li>
	      <?php endif;?>
	    <?php endforeach;?>
	<?php endforeach;?>
    <?php endif;?>
<?php endforeach;?>
            </ul>
          </div>
	</div>
	<div class="span10">
		<ul class="breadcrumb"><?php echo $breadcrumbs?></ul>
		<?php echo $content?>
	</div>
      </div>
      <hr>
    </div>
</body>
</html>