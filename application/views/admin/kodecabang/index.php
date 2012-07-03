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
            <td>Kode Cabang </td>
            <td>Nama Cabang</td>
        </tr>
        <tr>
            <td><input autocomplete="off" type="text" name="cab_code" id="cab_code" class="input-small "  value="<?php echo @$param['cab_code'] ?>"></td>
            <td><input autocomplete="off"  type="text" name="cab_name" id="cab_name" class="input-small " value="<?php echo @$param['cab_name'] ?>"></td>
            <td><button type="submit" class="btn"><i class="icon-search"></i>Search</button></td>            
            <td><?php //echo anchor($this->module[0] . '/admin/kodepos/kodepos/update/','Clear', 'class="btn"')?></td>
        </tr>
    </table>
</form>


<table class="table sortable">
  <thead>
    <tr>
      <th width="10%">Kode Cabang</th>
      <th width="80%">Nama Cabang</th>
    </tr>
  </thead>
  <tbody>
  <?php if ($data):?>
    <?php foreach ($data as $item):?>
    <tr>
      <td><?php echo anchor($this->module[0] . '/update/' . $item->cab_idx, $item->cab_code)?></td>
      <td><?php echo $item->cab_name ?></td>
    </tr>
    <?php endforeach;?>
  <?php else:?>
    There is no data. <?php echo anchor($module[0].'/insert','Please input one here')?>
  <?php endif;?>
  </tbody>
</table>
<?php echo $page['links']?>