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
<form class="well form-search" style="text-align:left" name="search">
    <table>
        <tr>
            <td>Kodepos </td>
            <td>Kelurahan</td>
            <td>Kecamatan</td>
            <td>Kota</td>
        </tr>
        <tr>
            <td><input autocomplete="off" type="text" name="kodepos_no" id="kodepos_no" class="input-small "  value="<?php echo @$param['kodepos_no'] ?>"></td>
            <td><input autocomplete="off"  type="text" name="kodepos_kel" id="kodepos_kel" class="input-small " value="<?php echo @$param['kodepos_kel'] ?>"></td>
            <td><input autocomplete="off" type="text" name="kodepos_kec" id="kodepos_kec" class="input-small" value="<?php echo @$param['kodepos_kec'] ?>"></td>
            <td><input autocomplete="off" type="text" name="kodepos_kota" id="kodepos_kota" class="input-small" value="<?php echo @$param['kodepos_kota'] ?>"></td>
            <td><button type="submit" class="btn"><i class="icon-search"></i>Search</button></td>            
            <td><?php //echo anchor($this->module[0] . '/admin/kodepos/kodepos/update/','Clear', 'class="btn"')?></td>

        </tr>
    </table>
</form>


<table class="table sortable">
  <thead>
    <tr>
      <th width="10%">Kodepos</th>
      <th width="10%">Kelurahan</th>
      <th width="10%">Kecamatan</th>
      <th width="10%">Kota</th>
      <th width="">&nbsp;</th>
    </tr>
  </thead>
  <tbody>
  <?php if ($data):?>
    <?php foreach ($data as $item):?>
    <tr>
      <td><?php echo anchor($this->module[0] . '/update/' . $item->kodepos_idx, $item->kodepos_no)?></td>
      <td><?php echo $item->kodepos_kel ?></td>
      <td><?php echo $item->kodepos_kec ?></td>
      <td><?php echo $item->kodepos_kota ?></td>
    </tr>
    <?php endforeach;?>
  <?php else:?>
    There is no data. <?php echo anchor($module[0].'/insert','Please input one here')?>
  <?php endif;?>
  </tbody>
</table>
<?php echo $page['links']?>