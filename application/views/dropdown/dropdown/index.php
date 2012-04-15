<div class="page-header">
    <h2>List admin</h2>
</div>
<table class="table">
  <thead>
    <tr>
      <th>Username</th>
      <th>Name</th>
      <th>Status</th>
      <th width="50%">&nbsp;</th>
    </tr>
  </thead>
  <tbody>
  <?php if ($data):?>
    <?php foreach ($data as $item):?>
    <tr>
      <td><?php echo $item->adm_username ?></td>
      <td><?php echo anchor($this->module[0] . '/update/' . $item->adm_id, $item->adm_name)?></td>
      <td><?php echo $item->adm_status ?></td>
    </tr>
    <?php endforeach;?>
  <?php else:?>
    There is no data. <?php echo anchor($module[0].'/insert','Please input one here')?>
  <?php endif;?>
  </tbody>
</table>