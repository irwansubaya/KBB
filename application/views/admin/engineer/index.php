<script src="<?php echo base_url() ?>static/js/standardista-table-sorting-common.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>static/js/standardista-table-sorting-css.js" type="text/javascript"></script>
<script src="<?php echo base_url() ?>static/js/standardista-table-sorting.js" type="text/javascript"></script>

<div class="page-header">
    <h2>List User</h2>
</div>
<table class="table sortable">
  <thead>
    <tr>
      <th width="20%">Nama SE</th>
      <th width="10%">Tgl Lahir</th>
      <th width="30%">Alamat</th>
      <th width="10%">No KTP</th>
      <th width="">&nbsp;</th>
    </tr>
  </thead>
  <tbody>
  <?php if ($data):?>
    <?php foreach ($data as $item):?>
    <tr>
      <td><?php echo anchor($this->module[0] . '/update/' . $item->se_id, $item->se_nama)?></td>
      <td><?php echo date('d-M-Y', strtotime($item->se_tgl_lahir)) ?></td>
      <td><?php echo $item->se_alamat ?></td>
      <td><?php echo $item->se_no_ktp ?></td>
    </tr>
    <?php endforeach;?>
  <?php else:?>
    There is no data. <?php echo anchor($module[0].'/insert','Please input one here')?>
  <?php endif;?>
  </tbody>
</table>
