<script src="<?php echo base_url() ?>static/js/standardista-table-sorting-common.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>static/js/standardista-table-sorting-css.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>static/js/standardista-table-sorting.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>static/js/jquery.jstree.js" type="text/javascript"></script>
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
    <h2>List Customer</h2>
</div>
<div id="dialog">
    
    
</div>
<form class="well form-search" style="text-align:left" name="search">
    <table>
        <tr>
            <td>Corporate ID </td>
            <td>Nama Perusahaan</td>
            <td>Tgl Input</td>
            <td>Tgl Koneksi</td>
        </tr>
        <tr>
            <td><input autocomplete="off" type="text" name="cus_corporate_id" id="cus_corporate_id" class="input-small "  value="<?php echo @$param['cus_corporate_id'] ?>"></td>
            <td><input autocomplete="off"  type="text" name="cus_nama_perusahaan" id="cus_nama_perusahaan" class="input-small " value="<?php echo @$param['cus_nama_perusahaan'] ?>"></td>
            <td><input autocomplete="off" type="text" name="cus_tanggal_input" id="cus_input_date" class="input-small" value="<?php echo @$param['cus_tanggal_input'] ?>"></td>
            <td><input autocomplete="off" type="text" name="pkt_tanggal_koneksi" id="pkt_tgl_koneksi" class="input-small" value="<?php echo @$param['pkt_tanggal_koneksi'] ?>"></td>
            <td><button type="submit" class="btn"><i class="icon-search"></i>Search</button></td>            
            <td><?php echo anchor($this->module[0] . '/customer/update/','Clear', 'class="btn"')?></td>

        </tr>
    </table>
</form>
<table class="table sortable">
  <thead>
    <tr>
      <th width="10%">Corporate ID</th>
      <th width="15%">Nama Perusahaan</th>
      <th width="10%">Jenis Paket</th>
      <th width="15%">Tipe Paket</th>
      <th width="15%">Model Paket</th>
      <th width="15%">Tgl Schedule</th>
      <th width="15%">Status</th>
    </tr>
  </thead>
  <tbody>
  <?php if ($data):?>
    <?php foreach ($data as $item):?>
      <tr>
	<td><?php echo $item->cus_corporate_id?></td>
	<td><?php echo $item->cus_nama_perusahaan?></td>
	<td><?php echo $item->pkt_jenis ?></td>
	<td><?php echo $item->pkt_tipe ?></td>
	<td><?php echo $item->pkt_status ?></td>
	<td><?php echo $item->sched_date?></td>
	<td><?php echo $item->pkt_konfirm?></td>
      </tr>
    <?php endforeach;?>
  <?php else:?>
      <tr>
	<td colspan="7">There is no data.</td>
      </tr>
  <?php endif;?>
  </tbody>
</table>
<?php// echo $page['links']?>