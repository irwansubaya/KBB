<script src="<?php echo base_url() ?>static/js/standardista-table-sorting-common.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>static/js/standardista-table-sorting-css.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>static/js/standardista-table-sorting.js" type="text/javascript"></script>

<div class="page-header">
    <h2>List Paket for Customer : <?php echo '['.$cus->cus_corporate_id.'] '.$cus->cus_nama_perusahaan ?></h2>
</div>
<div class="tabbable" style="margin-bottom: 9px;">
    <ul class="nav nav-tabs">
	<li<?php echo ($action == 'detail')?' class="active"':'' ?>><?php echo anchor($module[0].'/update/detail/'.$cus->cus_idx,'Customer')?></li>
	<li<?php echo ($action == 'paket')?' class="active"':'' ?>><?php echo anchor($module[0].'/update/paket/'.$cus->cus_idx,'Paket & Key')?></li>
    </ul>
    <div class="tab-content">

	<table class="table sortable">
	  <thead>
	    <tr>
	      <th width="10%">Jenis Paket</th>
	      <th width="15%">Tipe Paket</th>
	      <th width="15%">Model Paket</th>
	      <th width="15%">Tgl Koneksi</th>
	      <th width="10%">Tgl Terima Paket</th>
	      <th width="10%">Tgl Due Date</th>
	      <th width="10%">Aktif</th>
	    </tr>
	  </thead>
	  <tbody>
	  <?php if ($data):?>
	    <?php foreach ($data as $item):?>
	    <tr>
	      <td><?php echo anchor($this->module[0] . '/update/paket/' . $item->cus_idx . '/' . $item->pkt_idx, $item->pkt_jenis)?></td>
	      <td><?php echo $item->pkt_tipe?></td>
	      <td><?php echo $item->pkt_status ?></td>
	      <td><?php echo $item->pkt_tanggal_koneksi ?></td>
	      <td><?php echo $item->pkt_tanggal_terima ?></td>
	      <td><?php echo $item->pkt_jatuh_tempo ?></td>
	      <td><input type="radio" name="aktif"></td>
	    </tr>
	    <?php endforeach;?>
	  <?php else:?>
	    There is no data.
	  <?php endif;?>
	  </tbody>
	</table>
	<?php echo anchor($this->module[0] . '/update/paket/' . $item->cus_idx . '/new','Add new paket')?>
    </div>
</div>