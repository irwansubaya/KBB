<script src="<?php echo base_url() ?>static/js/standardista-table-sorting-common.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>static/js/standardista-table-sorting-css.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>static/js/standardista-table-sorting.js" type="text/javascript"></script>
<script type="text/javascript">
</script>
<div class="page-header">
    <h2>List Schedule for Customer :<?php echo '['.$cus->cus_corporate_id.'] '.$cus->cus_nama_perusahaan ?></h2>
</div>
<table class="table sortable">
  <thead>
    <tr>
      <th width="5%">ID</th>
      <th width="10%">Jenis Paket</th>
      <th width="10%">Tipe Paket</th>
      <th width="10%">Model Paket</th>
      <th width="10%">Status</th>
      <th width="10%">Sched Date</th>
      <th width="10%">Sched Time</th>
      <th width="10%">Enginer</th>
      <th width="15%">Resolved Date</th>
      <th width="10%">Keterangan</th>
    </tr>
  </thead>
  <tbody>
  <?php if ($data):?>
    <?php foreach ($data as $item):?>
      <tr>
	<td><?php echo anchor($module[0].'/update/schedule/'.$cus_idx.'/'.$pkt_idx.'/'.$item->sched_idx, $item->sched_idx)?></td>
	<td><?php echo $item->pkt_jenis ?></td>
	<td><?php echo $item->pkt_tipe ?></td>
	<td><?php echo $item->pkt_status ?></td>
	<td><?php echo anchor($this->module[0] . '/update/hasjung/'.$cus_idx.'/'.$pkt_idx.'/'.$item->sched_idx, $item->sched_status)?></td>
	<td><?php echo ($item->sched_date=='0000-00-00' || $item->sched_date=='1970-01-01')? '' : date('d-M-Y',strtotime($item->sched_date ))?></td>
	<td><?php echo ($item->sched_time == '00:00:00') ? '' : $item->sched_time ?></td>
	<td><?php echo ($item->sched_engineer == '0') ? '' :$item->sched_engineer?></td>
	<td><?php echo ($item->sched_resolve_date=='0000-00-00' || $item->sched_resolve_date=='1970-01-01')? '' : date('d-M-Y',strtotime($item->sched_resolve_date )) ?></td>
	<td><?php echo ($item->sched_keterangan == '0') ? '' :$item->sched_keterangan?></td>
      </tr>
    <?php endforeach;?>
  <?php else:?>
      <tr>
	<td colspan="7">There is no data.</td>
      </tr>
  <?php endif;?>
  </tbody>
</table>
<?php echo anchor($module[0].'/insert/'.$cus_idx.'/'.$pkt_idx,'Add New Schedule')?>