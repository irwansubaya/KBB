<script src="<?php echo base_url()?>static/js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
        $("#formid").validate();
        $('#myModal').modal('show')
    });
    /*function dontEnter(evt) { 
    var evt = (evt) ? evt : ((event) ? event : null); 
        var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null); 
        if ((evt.keyCode == 13) && (node.type=="text"))  {return false;} 
      } 
      document.onkeypress = dontEnter;
    */
</script>
<div class="modal" id="myModal">
    <div class="modal-header">
	<h3>Detail Customer & Paket</h3>
	</div>
	    <div class="modal-body">
	    <table>
	    <tr>
		<td>Corporate ID</td>
		<td>:</td>
		<td>
		    <?php
		    echo "$cus->cus_corporate_id";
		    ?>
		</td>
	    </tr>
	    <tr>
		<td>Nama Perusahaan / Nasabah</td>
		<td>:</td>
		<td>
		    <?php
		    echo "$cus->cus_nama_perusahaan";
		    ?>
		</td>
	    </tr>
	    <tr>
		<td>No Rekening</td>
		<td>:</td>
		<td>
		    <?php
		    echo "$cus->cus_no_rekening";
		    ?>
		</td>
	    </tr>
	    <tr>
		<td>ALamat</td>
		<td>:</td>
		<td>
		    <?php
		    echo "$cus->cus_alamat";
		    ?>
		</td>
	    </tr>	    
	    <tr>
		<td>Nama User / PIC</td>
		<td>:</td>
		<td>
		    <?php
		    echo "$cus->cus_cp";
		    ?>
		</td>
	    </tr>
	    <tr>
		<td>Kota</td>
		<td>:</td>
		<td>
		    <?php
		    echo "$cus->cus_kota";
		    ?>
		</td>
	    </tr>
	    <tr>
		<td>Kode Pos</td>
		<td>:</td>
		<td>
		    <?php
		    echo "$cus->cus_kodepos";
		    ?>
		</td>
	    </tr>
	    <tr>
		<td>Telp Kantor</td>
		<td>:</td>
		<td>
		    <?php
		    echo "$cus->cus_telepon_kantor";
		    ?>
		</td>
	    </tr>
	    <tr>
		<td>Telp Rumah</td>
		<td>:</td>
		<td>
		    <?php
		    echo "$cus->cus_telepon_rumah";
		    ?>
		</td>
	    </tr>
	    <tr>
		<td>Telp Handphone</td>
		<td>:</td>
		<td>
		    <?php
		    echo "$cus->cus_handphone";
		    ?>
		</td>
	    </tr>
	    <tr>
		<td>Telp Fax</td>
		<td>:</td>
		<td>
		    <?php
		    echo "$cus->cus_no_fax";
		    ?>
		</td>
	    </tr>
	    <tr>
		<td>Kode Cabang</td>
		<td>:</td>
		<td>
		    <?php
		    echo "$cus->cus_kode_cabang";
		    ?>
		</td>
	    </tr>
	    <tr>
		<td>Cabang</td>
		<td>:</td>
		<td>
		    <?php
		    echo "$cus->cus_cabang";
		    ?>
		</td>
	    </tr>
	</table>
	
	<table class="table sortable">
	  <thead>
	    <tr>
	      <th>Jenis Paket</th>
	      <th>Tipe Paket</th>
	      <th>Model Paket</th>
	      <th>Jumlah Key</thH>
	      <th>Tgl Koneksi</th>
	      <th>Tgl Terima Paket</th>
	    </tr>
	  </thead>
	  <tbody>
	  <?php if ($data):?>
	    <?php foreach ($data as $item[0]):?>
	    <tr>
	      <td><?php echo $item[0]->pkt_jenis?></td>
	      <td><?php echo $item[0]->pkt_tipe?></td>
	      <td><?php echo $item[0]->pkt_status ?></td>
	      <td><?php echo $item[0]->pkt_jumlah_key?></td>
	      <td><?php echo ($item[0]->pkt_tanggal_koneksi == '') ? '' : date('d-M-Y',strtotime($item[0]->pkt_tanggal_koneksi ))?></td>
	      <td><?php echo ($item[0]->pkt_tanggal_terima == '') ? '' : date('d-M-Y',strtotime($item[0]->pkt_tanggal_terima ))?></td>
	      <!--<td><input type="checkbox" name="aktif"></td>-->
	    </tr>
	    <?php endforeach;?>
	  <?php else:?>
	    There is no data.
	  <?php endif;?>
	  </tbody>
	</table>
	</div>
    <div class="modal-footer">
	<?php echo anchor($this->module[0] . '/customer/update/?'.$_SERVER['QUERY_STRING'],'Close', 'class="btn"')?>
	<?php echo anchor($this->module[0] . '/update/paket/' . $cus->cus_idx . '/customer_new_paket','Add new paket','class="btn"');?>
	<!--<a href="#" class="btn">Close</a>
	<a href="#" class="btn btn-primary">Save changes</a>
	-->
    </div>
</div>


