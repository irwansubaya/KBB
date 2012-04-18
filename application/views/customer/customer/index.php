<div class="page-header">
    <h2>List User</h2>
</div>
<table class="table">
  <thead>
    <tr>
        <td><?php echo form_text('','cus_corporate_id',(isset($data->cus_corporate_id))?$data->cus_corporate_id:'','class="span2" maxlength="10"');?></td>
        <td><?php echo form_submit('search','Search', 'class="btn btn-primary"')?></td>
    </tr>
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