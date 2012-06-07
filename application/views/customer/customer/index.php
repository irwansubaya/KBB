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
      <th width="10%">CORP ID</th>
      <th width="15%">NAMA PERUSAHAAN</th>
      <th width="15%">CONTACT PERSON</th>
      <th width="15%">ALAMAT</th>
      <th width="10%">HANDPHONE</th>
      <th width="10%">JENIS PAKET</th>
      <th width="10%">SLA</th>
      <th width="10%">TGL KONEKSI</th>
      <td>STATUS</td>
    </tr>
  </thead>
  <tbody>  
  <?php if ($data):?>
    <?php foreach ($data as $item):?>
    <tr>
      <!--<td><?php// echo anchor($this->module[0] . '/update/detail/' . $item->cus_idx, $item->cus_corporate_id)?></td>-->
      <td><?php echo $item->cus_corporate_id ?></td>
      <td><?php echo anchor($this->module[0] . '/update/customer_paket/' . $item->cus_idx, $item->cus_nama_perusahaan)?></td>
      <!--<td><?php //echo $item->cus_nama_perusahaan?></td>-->
      <td><?php echo $item->cus_cp ?></td>
      <td><?php echo $item->cus_alamat ?></td>
      <td><?php echo $item->cus_handphone ?></td>
      <td><?php echo $item->pkt_jenis ?></td>
      <td>  <?php
                $tgl_trm_pkt = $item-> pkt_tanggal_terima;
                $tgl_hari_ini=  date('Y-m-d');
                $pecah1 = explode("-", $tgl_trm_pkt);
                $date1 = $pecah1[2];
                $month1 = $pecah1[1];
                $year1 = $pecah1[0];
                
                $pecah2 = explode("-", $tgl_hari_ini);
                $date2 = $pecah2[2];
                $month2 = $pecah2[1];
                $year2 =  $pecah2[0];
                $trm_pkt = GregorianToJD($month1, $date1, $year1);
                $hari_ini = GregorianToJD($month2, $date2, $year2);
                
                $total_hari = $hari_ini - $trm_pkt;
                echo $total_hari;
            ?>        
      </td>
      <td><?php echo ($item->pkt_tanggal_koneksi == '') ? '' : date('d-M-Y',strtotime($item->pkt_tanggal_koneksi ))?></td>
      <td><?php echo anchor(base_url().'schedule/schedule/schedule_list/'.$item->cus_idx.'/'.$item->pkt_idx,$item->pkt_konfirm)?></td>
    </tr>
    <?php endforeach;?>
  <?php else:?>
    There is no data. <?php echo anchor($module[0].'/insert','Please input one here')?>
  <?php endif;?>
  </tbody>
</table>
<?php echo $page['links']?>