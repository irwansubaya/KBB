<div class="page-header">
    <h2>List User</h2>
</div>
<table class="table">
  <thead>
    <tr>
      <th width="40%">Paket ID</th>
    </tr>
  </thead>
  <tbody>
  <?php if ($data):?>
    <?php foreach ($data as $item):?>
    <tr>
      <td><?php echo anchor($this->module[0] . '/update/' . $item->key_idx, $item->pkt_idx)?></td>
    </tr>
    <?php endforeach;?>
  <?php else:?>
    There is no data. <?php echo anchor($module[0].'/insert','Please input one here')?>
  <?php endif;?>
  </tbody>
</table>