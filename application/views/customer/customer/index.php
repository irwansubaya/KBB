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
<form class="well form-search" style="text-align:right">
    <table>
        <tr>
            <td><?php echo form_drop('','asdes',array('ASC'=>'Ascending','DESC'=>'Descending'),@$param['asdes'],'class="span2"');?></td>            
            <td><input type="text" name="cus_nama_perusahaan" id="cus_nama_perusahaan" class="input-medium search-query" placeholder="Nama Perusahaan" value="<?php echo @$param['cus_nama_perusahaan'] ?>"></td>
            <td><input type="text" name="cus_corporate_id" id="cus_corporate_id" class="input-medium search-query" placeholder="Input Corporate ID ..." value="<?php echo @$param['cus_corporate_id'] ?>"></td>
            <td><input type="text" name="cus_tanggal_koneksi" id="cus_input_date" class="input-small search-query" placeholder="Tgl Input"value="<?php echo @$param['cus_tanggal_input'] ?>"></td>
            <td><input type="text" name="pkt_tanggal_koneksi" id="pkt_tgl_koneksi" class="input-small search-query" placeholder="Tgl Koneksi"value="<?php echo @$param['pkt_tanggal_koneksi'] ?>"></td>
            <td><button type="submit" class="btn"><i class="icon-search"></i> Search</button></td>
        </tr>
        <tr>
            <td align="left"><input type="checkbox" name="cek_nama_perusahaan" value="<?php (isset($data->cek_nama_perusahaan) && $data->cek_nama_perusahaan)?' checked':'' ?>"> Nama Perusahaan<br>
            <!--<input type="radio" name="cek_nama_perusahaan" id="cek_nama_perusahaan" value="0">Corporate ID<br>
            <input type="radio" name="cek_corporate_id" id=""value="1" >Nama Perusahaan</td>
            <td><?php echo form_drop('','corpname',array('namper'=>'Nama Perusahaan','corpid'=>'Corporate ID'),@$param['corpname'],'class="span2"');?></td>
            -->  
        </tr>
    </table>
</form>

<table class="table">
  <thead>
    <tr>
      <th width="10%">Corporate ID</th>
      <th width="15%">Nama Perusahaan</th>
      <th width="15%">Contact Person</th>
      <th width="15%">Alamat</th>
      <th width="10%">E-mail</th>
      <th width="10%">Handphone</th>
      <th width="10%">TGL Input</th>
      <!--<th width="10%">TGL Koneksi</th>-->
    </tr>
  </thead>
  <tbody>
  <?php if ($data):?>
    <?php foreach ($data as $item):?>
    <tr>
      <td><?php echo anchor($this->module[0] . '/update/detail/' . $item->cus_idx, $item->cus_corporate_id)?></td>
      <td><?php echo $item->cus_nama_perusahaan?></td>
      <td><?php echo $item->cus_cp ?></td>
      <td><?php echo $item->cus_alamat ?></td>
      <td><?php echo $item->cus_email ?></td>
      <td><?php echo $item->cus_handphone ?></td>
      <td><?php echo date('d-m-y',strtotime($item->cus_tanggal_input ))?></td>
      <!--<td><?php echo date('d-m-y',strtotime($item->pkt_tanggal_koneksi ))?></td>-->
    </tr>
    <?php endforeach;?>
  <?php else:?>
    There is no data. <?php echo anchor($module[0].'/insert','Please input one here')?>
  <?php endif;?>
  </tbody>
</table>
<?php echo $page['links']?>