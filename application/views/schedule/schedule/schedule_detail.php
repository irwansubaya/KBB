<script src="<?php echo base_url()?>static/js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#formid").validate();
	$("#sched_date").datepicker({
		    changeMonth: true,
		    changeYear: true,
		    dateFormat: 'dd-M-yy',
		    showAnim: 'fold'
	});
        //$('#date').datepicker();
        $('#date_time').datetimepicker();
        //$('#time').timepicker();
    });
    
    	//var val = new Array();
	<?php
	//foreach ($kategori as $val) 
	  //  echo "val['{$val[0]}'] = '{$val[1]}';\n";
	?>
	$("#call_status").val(val[$("#call_keterangan").val()]);
 
	$("#call_keterangan").change(function() {
	    $("#call_status").val(val[$("#call_keterangan").val()]);
	});
    
    var id = 0;
    function insert_call ()
    {
        if ($("#call_konfirm").val() == '') {alert ('Please fill respon'); $("#call_konfirm").focus()}
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
		    '<td>'+$("#call_konfirm").val()+'<input type="hidden" name="item_call_konfirm[]" value="'+$("#call_konfirm").val()+'"></td>'+
                    '<td>'+$("#call_cp_lain").val()+'<input type="hidden" name="item_call_cp_lain[]" value="'+$("#call_cp_lain").val()+'"></td>'+
                    '<td>'+$("#call_telp_lain").val()+'<input type="hidden" name="item_call_telp_lain[]" value="'+$("#call_telp_lain").val()+'"></td>'+
                    '<td>'+$("#call_keterangan").val()+'<input type="hidden" name="item_call_keterangan[]" value="'+$("#call_keterangan").val()+'"></td>'+
		    '<td><a href="" onclick="edit_call(\''+id+
						    '\', \''+$("#call_nama_admin").val()+
						    '\', \''+$("#call_date").val()+
                                                    '\', \''+$("#call_konfirm").val()+
                                                    '\', \''+$("#call_cp_lain").val()+
                                                    '\', \''+$("#call_telp_lain").val()+
                                                    '\', \''+$("#call_keterangan").val()+
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
        $("#call_konfirm").val( VAL );
        $("#call_cp_lain").val( VAL );
        $("#call_telp_lain").val( VAL );
	$("#call_keterangan").val( VAL );
	$("#mode").val( 'insert' );
    }

    function edit_call ( ID, ADM, DATE, KONFIRM, CPLAIN, TELPLAIN, KETERANGAN )
    {
        $("#call_idx").val( ID );
	$("#call_nama_admin").val( ADM );
	$("#call_date").val( DATE );
	$("#call_konfirm").val( KONFIRM );
	$("#call_cp_lain").val( CPLAIN );
        $("#call_telp_lain").val( TELPLAIN );
	$("#call_keterangan").val( KETERANGAN );
        
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
    <h2>Schedule for Customer :<?php echo '['.$cus->cus_corporate_id.'] '.$cus->cus_nama_perusahaan ?></h2>
</div>
<?php echo form_open(uri_string(),array('id'=>'formid', 'class'=>'form-horizontal'))?>
<?php echo view_errors();?>
<table>
    <tr>
	<td><?php echo form_hidden('cus_idx','', 'id=cus_idx');?></td>
        <td><?php echo form_hidden('pkt_idx','', 'id=pkt_idx');?></td>
    </tr>
    <tr>
        <td><?php echo form_text('Corporate ID*','cus_corporate_id',(isset($data[0]->cus_corporate_id))?$data[0]->cus_corporate_id:'','class="span2" maxlength="10" id="sched_corporate_id" readonly');?></td>
	<td><?php echo form_hidden('sched_idx','', 'id=sched_idx');?></td>
    </tr>
    <tr>
        <td><?php echo form_text('Nama Perusahaan / Nasabah','cus_nama_perusahaan',(isset($data[0]->cus_nama_perusahaan))?$data[0]->cus_nama_perusahaan:'','class="span2" maxlength="64" id="cus_nama_perusahaan" readonly');?></td>
        <td>&nbsp;</td>
        <td><?php echo form_area('Contact Person','cus_cp',(isset($data[0]->cus_cp))?$data[0]->cus_cp:'','class="span3" maxlength="64" readonly');?></td>
    </tr>
    <tr>
        <td><?php echo form_text('Kota','cus_kota',(isset($data[0]->cus_kota))?$data[0]->cus_kota:'','class="span2" readonly');?></td>
        <td>&nbsp;</td>
        <td><?php echo form_area('ALamat','cus_alamat',(isset($data[0]->cus_alamat))?$data[0]->cus_alamat:'','class="span3" maxlength="255" readonly');?></td>
    </tr>
    <tr>
        <td><?php echo form_text('Telp Kantor ','cus_telepon_kantor',(isset($data[0]->cus_telepon_kantor))?$data[0]->cus_telepon_kantor:'','class="span2" maxlength="32" readonly');?></td>
        <td>&nbsp;</td>
        <td><?php echo form_text('Tipe Paket','pkt_tipe',(isset($data[0]->pkt_tipe))?$data[0]->pkt_tipe:'','class="span2" id="pkt_tipe" readonly');?></td>
    </tr>
    <tr>
        <td><?php echo form_text('Telp Handphone ','cus_handphone',(isset($data[0]->cus_handphone))?$data[0]->cus_handphone:'','class="span2" maxlength="32"  readonly');?></td>
        <td>&nbsp;</td>
        <td><?php echo form_text('Jenis Paket','pkt_jenis',(isset($data[0]->pkt_jenis))?$data[0]->pkt_jenis:'','class="span2" readonly');?></td>
    </tr>
    <tr>
        <td><?php echo form_text('Telp Rumah ','cus_telepon_rumah',(isset($data[0]->cus_telepon_rumah))?$data[0]->cus_telepon_rumah:'','class="span2" maxlength="32"  readonly');?></td>
        <td>&nbsp;</td>
        <td><?php echo form_text('Model Paket','pkt_status',(isset($data[0]->pkt_status))?$data[0]->pkt_status:'','class="span2"  readonly');?></td>
    </tr>
    <tr>
        <td><?php echo form_text('Tgl Koneksi','pkt_tanggal_koneksi',(isset($data[0]->pkt_tanggal_koneksi))?$data[0]->pkt_tanggal_koneksi:'','class="span2" maxlength="15"  readonly');?></td>
        <td>&nbsp;</td>
        <td><?php echo form_text('Tgl Due Date','pkt_jatuh_tempo',(isset($data[0]->pkt_jatuh_tempo))?$data[0]->pkt_jatuh_tempo:'','class="span2" maxlength="15"  readonly');?></td> 
    </tr>
    <tr>
        <td><?php echo form_text('Tgl Terima Paket','pkt_tanggal_terima',(isset($data[0]->pkt_tanggal_terima))?$data[0]->pkt_tanggal_terima:'','class="span2" maxlength="15" id="pkt_tanggal_terima" readonly');?></td>
        <td>&nbsp;</td>
        <td><?php echo form_drop('Status *','cus_status',$status,(isset($data[0]->cus_status))?$data[0]->cus_status:'','class="span2"');?></td>
    </tr>
    <tr>
        <td><?php echo form_text('Schedule Date & Time *','sched_date_time',(isset($data[0]->sched_date_time))?$data[0]->sched_date_time:'','class="span2" id="date_time"');?></td>
        <td>&nbsp;</td>
        <td><?php echo form_drop('Visit','sched_visit',$visit,(isset($data[0]->sched_visit))?$data[0]->sched_visit:'','class="span2"');?></td>
    </tr>
    <tr>
        <td>
            <div class="control-group">
		<label class="control-label" for="it_has_ed">Agenda Kunjungan</label>
		<div class="controls">
		    <input type="checkbox" name="agenda_kunj" <?php (isset($data[0]->sched_agenda_kunjungan) && $data[0]->sched_agenda_kunjungan==1)?' checked':'' ?>>  Key BCA Delivery<br>
		    <input type="checkbox" name="agenda_kunj" <?php (isset($data[0]->sched_agenda_kunjungan) && $data[0]->sched_agenda_kunjungan==1)?' checked':'' ?>>  VPN Setting & Instalation<br>
		    <input type="checkbox" name="agenda_kunj" <?php (isset($data[0]->sched_agenda_kunjungan) && $data[0]->sched_agenda_kunjungan==1)?' checked':'' ?>>  Tarining Pemakaian<br>
		    <input type="checkbox" name="agenda_kunj" <?php (isset($data[0]->sched_agenda_kunjungan) && $data[0]->sched_agenda_kunjungan==1)?' checked':'' ?>>  Training Sysadmin<br>
		    <input type="checkbox" name="agenda_kunj" <?php (isset($data[0]->sched_agenda_kunjungan) && $data[0]->sched_agenda_kunjungan==1)?' checked':'' ?>>  Training MAR<br>
		    <input type="checkbox" name="agenda_kunj" <?php (isset($data[0]->sched_agenda_kunjungan) && $data[0]->sched_agenda_kunjungan==1)?' checked':'' ?>>  Training MFTS Converter<br>
		    <input type="checkbox" name="agenda_kunj" <?php (isset($data[0]->sched_agenda_kunjungan) && $data[0]->sched_agenda_kunjungan==1)?' checked':'' ?>>  KBB Traouble Shooting
		</div>
	    </div>
        <?php //echo form_text('Agenda Kunjungan *','sched_agenda_kunjungan',(isset($data[0]->sched_agenda_kunjungan))?$data[0]->sched_agenda_kunjungan:'','class="span3" maxlength="10"');?>
        </td>
        <td>&nbsp;</td>
        <td><?php echo form_area('Alamat Kirim *','sched_alamat_kirim',(isset($data[0]->sched_alamat_kirim))?$data[0]->sched_alamat_kirim:'','class="span3" maxlength="10"');?></td>
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
	 <td>Respon</td>
        <td>
            <select name="call_konfirm" id="call_konfirm" class="span2">
                <?php
                foreach ($konfirm as $vil) {
                    echo '<option value="'.$vil[0].'">'.$vil[0].'</option>';
                }
                ?>
            </select>
        </td>
        <!--<td>Kategori</td>
        <td>
            <select name="call_katagori" id="call_katagori" class="span2">
                <?php
                //foreach ($kategori as $val) {
                //    echo '<option value="'.$val[0].'">'.$val[0].'</option>';
                //}
                ?>
            </select>
        </td>
        <td>&nbsp;</td>
        <td>Status</td>
        <td><input type="text" name="call_status" id="call_status" class="span2" readonly="readonly"></td>-->
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>CP Lain</td>
        <td><input type="text" name="call_cp_lain" id="call_cp_lain" class="span2"></td>
        <td>&nbsp;</td>
        <td>Telp Lain</td>
        <td><input type="text" name="call_telp_lain" id="call_telp_lain" class="span2"></td>
        <td>&nbsp;</td>
	<td>Keterangan</td>
	<td><textarea name="keterangan" id="call_keterangan" class="span2"></textarea></td>
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
                <th width="10%">Respon</th>
                <th width="10%">CP Lain</th>
                <th width="10%">Telp Lain</th>
		<th width="20%">Keterangan</th>
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
        <?php if(isset($sched[0]->sched_idx)): ?><div class="pull-right"><?php echo anchor($module[0].'/delete/'.$sched[0]->sched_idx,'Delete User', 'class="btn btn-danger"')?></div><?php endif; ?>
    </div>
<?php echo form_close();?>
