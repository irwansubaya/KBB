<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Home</title>
	<link href="<?php echo base_url()?>static/css/bootstrap.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url()?>static/css/bootstrap-responsive.css" media="screen" rel="stylesheet" type="text/css" />
	<link href="<?php echo base_url()?>static/css/custom.css" media="screen" rel="stylesheet" type="text/css" />
</head>
<body>

    <div class="container">

      <div class="hero-unit">
        <h1>KBB</h1>
	<p>Management Software</p>
      </div>

      <div class="row">

	<div class="span12">
	      <ul class="thumbnails">
		<li class="span3">
		  <div class="thumbnail">
		    <div class="caption">
		      <h3>Management Admin</h3>
		      <p>
			    <ul class="nav nav-tabs nav-stacked">
			      <li><a href="<?php echo base_url().'admin/admin/insert'?>">Add New Admin</a></li>
			      <li><a href="<?php echo base_url().'admin/admin/'?>">List Admin</a></li>
			      <li><a href="<?php echo base_url().'admin/engineer/insert'?>">Add New Engineer</a></li>
			      <li><a href="<?php echo base_url().'admin/engineer/'?>">List Engineer</a></li>
			    </ul>
		      </p>
		    </div>
		  </div>
		</li>
		<li class="span3">
		  <div class="thumbnail">
		    <div class="caption">
		      <h3>Customer</h3>
		      <p>
			    <ul class="nav nav-tabs nav-stacked">
				<li><a href="<?php echo base_url().'customer/customer/insert'?>">Add New Customer</a></li>
				<li><a href="<?php echo base_url().'customer/customer/'?>">List Customer</a></li>
				<li><a href="<?php echo base_url().'customer/paket/insert'?>">Add New Paket</a></li>
				<li><a href="<?php echo base_url().'customer/paket/'?>">List paket</a></li>
			    </ul>
		      </p>
		    </div>
		  </div>
		</li>
		<li class="span3">
		  <div class="thumbnail">
		    <div class="caption">
		      <h3>Paket</h3>
		      <p>
			    <ul class="nav nav-tabs nav-stacked">
				<li><a href="<?php echo base_url().'Paket/Paket/insert'?>">Add New Paket</a></li>
				<li><a href="<?php echo base_url().'Paket/Paket/'?>">List Paket</a></li>
			    </ul>
		      </p>
		    </div>
		  </div>
		</li>
		<li class="span3">
		  <div class="thumbnail">
		    <div class="caption">
		      <h3>Report</h3>
		      <p>
			    <ul class="nav nav-tabs nav-stacked">
			    </ul>
		      </p>
		    </div>
		  </div>
		</li>
	      </ul>	
	</div>
	
        <div class="span12">
	  <form class="well form-inline" >
	    <input type="text" class="input-big" placeholder="Input your usename">
	    <input type="password" class="input-small" placeholder="Password">
	    <button type="submit" class="btn btn-primary">Log In</button>
	  </form><hr>
        </div>
	
        <div class="offset8 span4">
		<address>
		    <strong>Klik BCA Business</strong><br>
		    Business Park<br>
		    Jl. Raya Meruya Ilir Blok A11-A12<br>
		    Jakarta Barat<br>
		    <abbr title="Phone">Telepon: </abbr> (021)58908199
		    <abbr title="Fax">Fak :</abbr> (021) 58908255
		</address>
	</div>	

      </div>

    </div>
</body>
</html>