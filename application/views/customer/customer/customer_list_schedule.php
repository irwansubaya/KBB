<script src="<?php echo base_url() ?>static/js/standardista-table-sorting-common.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>static/js/standardista-table-sorting-css.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>static/js/standardista-table-sorting.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function() { 
    $('#demo1').click(function() { 
        $.blockUI({ message: $('#customer_new') }); 
 
        setTimeout($.unblockUI, 2000); 
    }); 
});
</script>
<div class="page-header">
    <h2>List Schedule for Customer :<?php echo '['.$cus->cus_corporate_id.'] '.$cus->cus_nama_perusahaan ?></h2>
</div>
<div class="tabbable" style="margin-bottom: 9px;">
    <ul class="nav nav-tabs">
	<li<?php echo ($action == 'schedule')?' class="active"':'' ?>><?php echo anchor($module[0].'/update/schedule/'.$cus->cus_idx,'schedule')?></li>
	<li<?php echo ($action == 'Hasjung')?' class="active"':'' ?>><?php echo anchor($module[0].'/update/Hasjung/'.$cus->cus_idx,'Hasil Schedule')?></li>
    </ul>
    <div class="tab-content">
	<table class="table sortable">
	  <thead>
	    <tr>
              <th width="10%">Corporate ID</th>
	      <th width="15%">Nama Perusahaan</th>
              <th width="10%">Jenis Paket</th>
	      <th width="15%">Tipe Paket</th>
	      <th width="15%">Model Paket</th>
              <th width="15%">Tgl Schedule</th>
              <th width="15%">Alamat Kirim</th>
	      
	    </tr>
	  </thead>
	  <tbody>
	  <?php if ($data):?>
	    <?php foreach ($data as $item):?>
	    <tr>
	      <td><?php echo anchor($this->module[0] . '/update/schedule/' . $item->cus_idx . '/' . $item->sched_idx, $item->cus_corporate_id)?></td>
	      <td><?php echo $item->cus_nama_perusahaan?></td>
	      <td><?php echo $item->pkt_jenis ?></td>
	      <td><?php echo $item->pkt_tipe ?></td>
	      <td><?php echo $item->pkt_status ?></td>
	      <td><?php echo $item->sched_date_time?></td>
	      <td><?php echo $item->sched_alamat_kirim?></td>
	    </tr>
	    <?php endforeach;?>
	  <?php else:?>
	    There is no data.
	  <?php endif;?>
	  </tbody>
	</table>

<?php
//echo "<pre>";
//var_dump($query);
//echo "</pre>";
//exit;
?>
        <?php echo anchor($module[0].'/update/schedule/'.$cus->cus_idx.'/customer_new_schedule','Add New Schedule')?>
        <?php //echo anchor($this->module[0].'/update/schedule/'.$cus->cus_idx.'/customer_new_schedule','Add New Schedule')?>
    </div>
</div>