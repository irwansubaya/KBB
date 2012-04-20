<script type="text/javascript">
    $(document).ready(function(){
        $("#cus_input_date").datepicker({
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
<form class="well form-search" style="text-align:right">
    <input type="text" name="cus_input_date" id="cus_input_date" class="input-small search-query" value="<?php echo @$param['date'] ?>">
    <input type="text" name="cus_corporate_id" id="cus_corporate_id" class="input-medium search-query" placeholder="Input Corporate ID ..." value="<?php echo @$param['corp_id'] ?>">
    <button type="submit" class="btn"><i class="icon-search"></i> Search</button>
</form>

<table class="table">
  <thead>
    <tr>
      <th width="10%">Corporate ID</th>
      <th width="15%">Contact Person</th>
      <th width="20%">Alamat</th>
      <th width="10%">Telp Kantor</th>
      <th width="10%">Telp Rumah</th>
      <th width="10%">Handphone</th>
      <th width="10%">Tanggal Input</th>
    </tr>
  </thead>
  <tbody>
  <?php if ($data):?>
    <?php foreach ($data as $item):?>
    <tr>
      <td><?php echo anchor($this->module[0] . '/update/detail/' . $item->cus_idx, $item->cus_corporate_id)?></td>
      <td><?php echo $item->cus_cp ?></td>
      <td><?php echo $item->cus_alamat ?></td>
      <td><?php echo $item->cus_telepon_kantor ?></td>
      <td><?php echo $item->cus_telepon_rumah ?></td>
      <td><?php echo $item->cus_handphone ?></td>
      <td><?php echo date('d-m-y',strtotime($item->cus_tanggal_input ))?></td>
    </tr>
    <?php endforeach;?>
  <?php else:?>
    There is no data. <?php echo anchor($module[0].'/insert','Please input one here')?>
  <?php endif;?>
  </tbody>
</table>