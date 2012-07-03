<script src="<?php echo base_url() ?>static/js/standardista-table-sorting-common.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>static/js/standardista-table-sorting-css.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>static/js/standardista-table-sorting.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#cus_input_date").datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: 'dd-M-yy',
		showAnim: 'fold'
	});
        $("#pkt_tgl_koneksi").datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: 'dd-M-yy',
		showAnim: 'fold'
	});
    });
</script>

<div class="page-header">
    <h2>List User</h2>
</div>

<table class="table sortable">
  <thead>
    <tr>
      <th width="10%">ID</th>
      <th width="80%">Bidang Usaha</th>
    </tr>
  </thead>
  <tbody>
  <?php if ($data):?>
    <?php foreach ($data as $item):?>
    <tr>
       <td><?php echo $item->bid_idx ?></td>
      <td><?php echo anchor($this->module[0] . '/update/' . $item->bid_idx, $item->bid_name)?></td>
    </tr>
    <?php endforeach;?>
  <?php else:?>
    There is no data. <?php echo anchor($module[0].'/insert','Please input one here')?>
  <?php endif;?>
  </tbody>
</table>
<?php echo $page['links']?>