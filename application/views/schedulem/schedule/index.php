<div class="page-header">
    <h2>List User</h2>
</div>
<table class="table">
  <thead>
    <tr>
      <th width="10%">Corporate ID</th>
      <th width="20%">Nama Perusahaan</th>
      <th>Jenis Paket</th>
      <th>Jumlah Paket</th>
      <th>Tanggal Koneksi</th>
      <th>Tanggal Terima Key</th>
      <th>Tanggal Due Date</th>
    </tr>
  </thead>
  <tbody>
  <?php if ($data):?>
    <?php foreach ($data as $item):?>
    <tr>
      <td><?php echo anchor($this->module[0] . '/update/' . $item->pkt_idx, $item->cus_corporate_id)?></td>
      <td><?php echo $item->cus_nama_perusahaan ?></td>
      <td><?php echo $item->pkt_jenis ?></td>
      <td><?php echo $item->pkt_jumlah_key ?></td>
      <td><?php echo date('d-m-y',strtotime($item->pkt_tanggal_koneksi)) ?></td>
      <td><?php echo date('d-m-y',strtotime($item->pkt_tanggal_terima)) ?></td>
      <td><?php echo date('d-m-y',strtotime($item->pkt_jatuh_tempo)) ?></td>
    </tr>
    <?php endforeach;?>
  <?php else:?>
    There is no data. <?php echo anchor($module[0].'/insert','Please input one here')?>
  <?php endif;?>
  </tbody>
</table>