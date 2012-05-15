<script src="<?php echo base_url()?>static/js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#formid").validate();
	$("#sched_date").datepicker({
		    changeMonth: true,
		    changeYear: true,
		    dateFormat: 'dd-M-yy',
		    showAnim: 'fold',
	});
        //$('#date').datepicker();
        $('#date_time').datetimepicker();
        //$('#time').timepicker();
    });
    
    	var val = new Array();
	<?php
	//foreach ($kategori as $val) 
	  //  echo "val['{$val[0]}'] = '{$val[1]}';\n";
	?>
	$("#call_status").val(val[$("#call_kategori").val()]);
 
	$("#call_kategori").change(function() {
	    $("#call_status").val(val[$("#call_kategori").val()]);
	});
    
    var id = 0;
    function insert_call ()
    {
        if ($("#call_kategori").val() == '') {alert ('Please fill Kategori'); $("#call_kategori").focus()}
        else if ($("#call_status").val() == '') {alert ('Please fill Status'); $("#call_status").focus()}
        //else if ($("#call_cp_lain").val() == '') {alert ('Please fill CP Lain'); $("#call_cp_lain").focus()}
        //else if ($("#call_telp_lain").val() == '') {alert ('Please fill Telp Lain'); $("#call_telp_lain").focus()}
        //else if ($("#call_keterangan").val() == '') {alert ('Please fill Telp Lain'); $("#call_keterangan").focus()}
	else insert_call_print ();
    }

    function insert_call_print ()
    {
	$string = '<tr id="call_'+id+'">'+
		    '<td>'+$("#call_nama_admin").val()+'<input type="hidden" name="item_call_admin[]" value="'+$("#call_nama_admin").val()+'"></td>'+
		    '<td>'+$("#call_date").val()+'<input type="hidden" name="item_call_date[]" value="'+$("#call_date").val()+'"></td>'+
                    '<td>'+$("#call_kategori").val()+'<input type="hidden" name="item_call_kategori[]" value="'+$("#call_kategori").val()+'"></td>'+
                    '<td>'+$("#call_status").val()+'<input type="hidden" name="item_call_status[]" value="'+$("#call_status").val()+'"></td>'+
                    '<td>'+$("#call_cp_lain").val()+'<input type="hidden" name="item_call_cp_lain[]" value="'+$("#call_cp_lain").val()+'"></td>'+
                    '<td>'+$("#call_telp_lain").val()+'<input type="hidden" name="item_call_telp_lain[]" value="'+$("#call_telp_lain").val()+'"></td>'+
		    '<td>'+$("#call_konfirm").val()+'<input type="hidden" name="item_call_konfirm[]" value="'+$("#call_konfirm").val()+'"></td>'+
                    '<td><a href="" onclick="edit_call(\''+id+
						    '\', \''+$("#call_nama_admin").val()+
						    '\', \''+$("#call_date").val()+
                                                    '\', \''+$("#call_kategori").val()+
                                                    '\', \''+$("#call_status").val()+
                                                    '\', \''+$("#call_cp_lain").val()+
                                                    '\', \''+$("#call_telp_lain").val()+
                                                    '\', \''+$("#call_konfirm").val()+
						    '\'); return false">E</a> | <a href="" onclick="remove_call(\''+id+'\'); return false;">D</a></td>'+
		   '</tr>';
	if ( $("#mode").val() == 'insert')
	{
	    $('#item').append( $string );
	}
	else {
	    $('tr#call_'+$("#call_idx").val()).replaceWith($string);
	}
	id++;
	set_call ('');
    }

    function set_call( VAL )
    {
	$("#call_nama_admin").val( VAL );
	$("#call_date").val( VAL );
        $("#call_kategori").val( VAL );
        $("#call_status").val( VAL );
        $("#call_cp_lain").val( VAL );
        $("#call_telp_lain").val( VAL );
        $("#call_konfirm").val( VAL );	
	$("#mode").val( 'insert' );
    }

    function edit_call ( ID, ADM, DATE, KATEGORI, STATUS, CPLAIN, TELPLAIN, KONFIRM)
    {
        $("#call_idx").val( ID );
	$("#call_nama_admin").val( ADM );
	$("#call_date").val( DATE );
	$("#call_kategori").val( KATEGORI );
        $("#call_status").val( STATUS );
        $("#call_cp_lain").val( CPLAIN );
        $("#call_telp_lain").val( TELPLAIN );
        $("#call_konfirm").val( KONFIRM );
	$("#mode").val('edit');
	return false;
    }

    function remove_call ( VAL )
    {
	$('#call_'+VAL).remove();
	return false;
    }
    
</script>
<div class="page-header">
    <h2>Detail Customer : <?php echo '['.$cus->cus_corporate_id.'] '.$cus->cus_nama_perusahaan ?></h2>
</div>
<div class="tabbable" style="margin-bottom: 9px;">
<ul class="nav nav-tabs">
	<li<?php echo ($action == 'schedule')?' class="active"':'' ?>><?php echo anchor($module[0].'/update/schedule/'.$cus->cus_idx,'schedule')?></li>
	<li<?php echo ($action == 'Hasjung')?' class="active"':'' ?>><?php echo anchor($module[0].'/update/Hasjung/'.$cus->cus_idx,'Hasil Schedule')?></li>
    </ul>
<?php echo form_open(uri_string(),array('id'=>'formid', 'class'=>'form-horizontal'))?>
<?php echo view_errors();?>
<table>
    <tr>
	<td><?php echo form_hidden('cus_idx','', 'id=cus_idx');?></td>
        <td><?php echo form_hidden('pkt_idx','', 'id=pkt_idx');?></td>
    </tr>
    <tr>
        <td><?php echo form_text('Corporate ID*','cus_corporate_id',(isset($cus->cus_corporate_id))?$cus->cus_corporate_id:'','class="span2" maxlength="10" id="sched_corporate_id" readonly');?></td>
	<td><?php echo form_hidden('sched_idx','', 'id=sched_idx');?></td>
    </tr>
    <tr>
        <td><?php echo form_text('Nama Perusahaan / Nasabah','cus_nama_perusahaan',(isset($cus->cus_nama_perusahaan))?$cus->cus_nama_perusahaan:'','class="span2" maxlength="64" id="cus_nama_perusahaan" readonly');?></td>
        <td>&nbsp;</td>
        <td><?php echo form_area('Contact Person','cus_cp',(isset($cus->cus_cp))?$cus->cus_cp:'','class="span3" maxlength="64" readonly');?></td>
    </tr>
    <tr>
        <td><?php echo form_text('Kota','cus_kota',(isset($cus->cus_kota))?$cus->cus_kota:'','class="span2" readonly');?></td>
        <td>&nbsp;</td>
        <td><?php echo form_area('ALamat','cus_alamat',(isset($cus->cus_alamat))?$cus->cus_alamat:'','class="span3" maxlength="255" readonly');?></td>
    </tr>
    <tr>
        <td><?php echo form_text('Telp Kantor ','cus_telepon_kantor',(isset($cus->cus_telepon_kantor))?$cus->cus_telepon_kantor:'','class="span2" maxlength="32" readonly');?></td>
        <td>&nbsp;</td>
        <td><?php echo form_text('Tipe Paket','pkt_tipe',(isset($cus->pkt_tipe))?$cus->pkt_tipe:'','class="span2" id="pkt_tipe" readonly');?></td>
    </tr>
    <tr>
        <td><?php echo form_text('Telp Handphone ','cus_handphone',(isset($cus->cus_handphone))?$cus->cus_handphone:'','class="span2" maxlength="32"  readonly');?></td>
        <td>&nbsp;</td>
        <td><?php echo form_text('Jenis Paket','pkt_jenis',(isset($cus->pkt_jenis))?$cus->pkt_jenis:'','class="span2" readonly');?></td>
    </tr>
    <tr>
        <td><?php echo form_text('Telp Rumah ','cus_telepon_rumah',(isset($cus->cus_telepon_rumah))?$cus->cus_telepon_rumah:'','class="span2" maxlength="32"  readonly');?></td>
        <td>&nbsp;</td>
        <td><?php echo form_text('Model Paket','pkt_status',(isset($cus->pkt_status))?$cus->pkt_status:'','class="span2"  readonly');?></td>
    </tr>
    <tr>
        <td><?php echo form_text('Tgl Koneksi','pkt_tanggal_koneksi',(isset($cus->pkt_tanggal_koneksi))?$cus->pkt_tanggal_koneksi:'','class="span2" maxlength="15"  readonly');?></td>
        <td>&nbsp;</td>
        <td><?php echo form_text('Schedule Date & Time *','sched_time',(isset($cus->sched_time))?$cus->sched_time:'','class="span2" id="date_time"');?></td> 
    </tr>
    <tr>
        <td><?php echo form_text('Tgl Terima Paket','pkt_tanggal_terima',(isset($cus->pkt_tanggal_terima))?$cus->pkt_tanggal_terima:'','class="span2" maxlength="15" id="pkt_tanggal_terima" readonly');?></td>
        <td>&nbsp;</td>
        <td><?php echo form_drop('Visit','sched_visit',$visit,(isset($cus->sched_visit))?$cus->sched_visit:'','class="span2"');?></td>
    </tr>
    <tr>
        <td><?php echo form_text('Tgl Due Date','pkt_jatuh_tempo',(isset($cus->pkt_jatuh_tempo))?$cus->pkt_jatuh_tempo:'','class="span2" maxlength="15"  readonly');?></td>
        <td>&nbsp;</td>
        <td><?php echo form_drop('Status *','cus_status',$status,(isset($cus->cus_status))?$cus->cus_status:'','class="span2"');?></td>
    </tr>
    <tr>
        <td>
            <div class="control-group">
		<label class="control-label" for="it_has_ed">Agenda Kunjungan</label>
		<div class="controls">
		    <input type="checkbox" name="agenda_kunj" <?php (isset($cus->sched_agenda_kunjungan) && $cus->sched_agenda_kunjungan==1)?' checked':'' ?>>  Key BCA Delivery<br>
		    <input type="checkbox" name="agenda_kunj" <?php (isset($cus->sched_agenda_kunjungan) && $cus->sched_agenda_kunjungan==1)?' checked':'' ?>>  VPN Setting & Instalation<br>
		    <input type="checkbox" name="agenda_kunj" <?php (isset($cus->sched_agenda_kunjungan) && $cus->sched_agenda_kunjungan==1)?' checked':'' ?>>  Tarining Pemakaian<br>
		    <input type="checkbox" name="agenda_kunj" <?php (isset($cus->sched_agenda_kunjungan) && $cus->sched_agenda_kunjungan==1)?' checked':'' ?>>  Training Sysadmin<br>
		    <input type="checkbox" name="agenda_kunj" <?php (isset($cus->sched_agenda_kunjungan) && $cus->sched_agenda_kunjungan==1)?' checked':'' ?>>  Training MAR<br>
		    <input type="checkbox" name="agenda_kunj" <?php (isset($cus->sched_agenda_kunjungan) && $cus->sched_agenda_kunjungan==1)?' checked':'' ?>>  Training MFTS Converter<br>
		    <input type="checkbox" name="agenda_kunj" <?php (isset($cus->sched_agenda_kunjungan) && $cus->sched_agenda_kunjungan==1)?' checked':'' ?>>  KBB Traouble Shooting
		</div>
	    </div>
        <?php //echo form_text('Agenda Kunjungan *','sched_agenda_kunjungan',(isset($cus->sched_agenda_kunjungan))?$cus->sched_agenda_kunjungan:'','class="span3" maxlength="10"');?>
        </td>
        <td>&nbsp;</td>
        <td><?php echo form_area('Alamat Kirim *','sched_alamat_kirim',(isset($cus->sched_alamat_kirim))?$cus->sched_alamat_kirim:'','class="span3" maxlength="10"');?></td>
    </tr>
</table>

<legend>Call Admin</legend>
   <div class="well form-inline">
    <table>
    <tr>
        <td>Nama Admin </td>
        <td><input type="text" name="call_nama_admin" placeholder="Nama Admin" id="call_nama_admin" class="span2" value="Irwan" readonly="readonly"></td>
        <td>&nbsp;</td>
        <td>Call Date</td>
        <td><input type="text" name="call_date" placeholder="Date" id="call_date" class="span2" readonly="readonly" value="<?php echo date('d-M-y H:i ;l')?>"></td>
        <td>&nbsp;</td>
        <td>Kategori</td>
        <td>
            <select name="call_kategori" id="call_kategori" class="span2">
                <?php
                foreach ($kategori as $val) {
                    echo '<option value="'.$val[0].'">'.$val[0].'</option>';
                }
                ?>
            </select>
        </td>
        <td>&nbsp;</td>
        <td>Status</td>
        <td><input type="text" name="call_status" id="call_status" class="span2" readonly="readonly"></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>CP Lain</td>
        <td><input type="text" name="call_cp_lain" placeholder="CP Lainnya" id="call_cp_lain" class="span2"></td>
        <td>&nbsp;</td>
        <td>Telp Lain</td>
        <td><input type="text" name="call_telp_lain" placeholder="Telepon Lainnya" id="call_telp_lain" class="span2"></td>
        <td>&nbsp;</td>
        <td>Konfirm</td>
        <td>
            <select name="call_konfirm" id="call_konfirm" class="span2">
                <?php
                foreach ($konfirm as $vil) {
                    echo '<option value="'.$vil[0].'">'.$vil[0].'</option>';
                }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td>
	    <input type="hidden" value="" name="call_idx" id="call_idx">
	    <?php echo form_button('insert-call','Insert','onclick="return insert_call()" class="btn"')?>
	</td>
    </tr>
    <tr>
        <td><input type="hidden" value="insert" name="mode" id="mode"></td>
        <td><input type="hidden" value="" name="id_call" id="id_call"></td>
    </tr>
    </table>
   </div>
    <table class="table table-bordered" id="call_list">
      <thead>
	<tr>
		<th width="10%">Admin</th>
		<th width="10%">Call Date</th>
                <th width="10%">Kategori</th>
		<th width="10%">Status</th>
                <th width="10%">CP Lain</th>
                <th width="10%">Telp Lain</th>
		<th width="20%">Konfirm</th>
                <th width="10%">&nbsp;</th>
	</tr>
      </thead>
      <tbody id="item">
      </tbody>
    </table>

    <p><code>Note: </code> &nbsp; All field mark with <code>*</code> are required.</p>
    <div class="form-actions">
        <?php echo form_submit('save','Save data', 'class="btn btn-primary"')?>
        <?php echo anchor($module[0],'Cancel', 'class="btn"')?>
        <?php if(isset($cus->sched_idx)): ?><div class="pull-right"><?php echo anchor($module[0].'/delete/'.$cus->sched_idx,'Delete User', 'class="btn btn-danger"')?></div><?php endif; ?>
    </div>
<?php echo form_close();?>
