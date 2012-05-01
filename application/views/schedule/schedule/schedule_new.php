<script src="<?php echo base_url()?>static/js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#formid").validate();
    });
    $("#sched_date").datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: 'yy-mm-dd',
		showAnim: 'fold'
	});
   $('#sched_corporate_id').autocomplete('<?php echo base_url()?>schedule/schedule/customer_ajax',{
		parse: function(data){
		    var parsed = [];
		    for (var i=0; i < data.length; i++) {
			parsed[i] = { data: data[i], value: data[i].cus_corporate_id };
		    }
		    return parsed;
		},
		formatItem: function(data,i,max){
		    return  '<div class="search_content"><bold> '+data.cus_corporate_id+' </bold> &nbsp;<small>'+data.cus_nama_perusahaan+'</small></div>';
		},
		width: 450, 
		dataType: 'json' 
	    }).result( 
		    function(event,data,formated){
			$('#pkt_corporate_id').val(data.cus_corporate_id);
                        $('#cus_nama_perusahaan').val(data.cus_nama_perusahaan);
                        $('#cus_cp').val(data.cus_cp);
	    		$('#cus_idx').val(data.cus_idx);
                        }
                    );
   
    var id = 0;
    function insert_call ()
    {
	/*if ($("#adm_username").val() == '') {alert ('Please fill Admin'); $("#adm_username").focus()}
	else if ($("#call_date").val() == '') {alert ('Please fill Date'); $("#call_date").focus()}
        */
        else if ($("#call_kategori").val() == '') {alert ('Please fill Kategori'); $("#call_kategori").focus()}
        else if ($("#call_status").val() == '') {alert ('Please fill Status'); $("#call_status").focus()}
        else if ($("#call_cp_lain").val() == '') {alert ('Please fill CP Lain'); $("#call_cp_lain").focus()}
        else if ($("#call_telp_lain").val() == '') {alert ('Please fill Telp Lain'); $("#call_telp_lain").focus()}
        else if ($("#call_keterangan").val() == '') {alert ('Please fill Telp Lain'); $("#call_keterangan").focus()}
	else insert_call_print ();
    }

    function insert_call_print ()
    {
	$string = '<tr id="call'+id+'">'+
		    //'<td>'+$("#call_date").val()+'<input type="hidden" name="item_call_date[]" value="'+$("#call_date").val()+'"></td>'+
                    '<td>'+$("#call_kategori").val()+'<input type="hidden" name="item_call_kategori[]" value="'+$("#call_kategori").val()+'"></td>'+
                    '<td>'+$("#call_status").val()+'<input type="hidden" name="item_call_status[]" value="'+$("#call_status").val()+'"></td>'+
                    '<td>'+$("#call_cp_lain").val()+'<input type="hidden" name="item_call_cp_lain[]" value="'+$("#call_cp_lain").val()+'"></td>'+
                    '<td>'+$("#call_telp_lain").val()+'<input type="hidden" name="item_call_telp_lain[]" value="'+$("#call_telp_lain").val()+'"></td>'+
		    '<td>'+$("#call_keterangan").val()+'<input type="hidden" name="item_call_keterangan[]" value="'+$("#call_keterangan").val()+'"></td>'+
                    '<td><a href="" onclick="edit_call(\''+id+
						    //'\', \''+$("#call_date").val()+
                                                    '\', \''+$("#call_kategori").val()+
                                                    '\', \''+$("#call_status").val()+
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
	update_amount();
    }

    function set_call( VAL )
    {
	//$("#call_date").val( VAL );
        $("#call_kategori").val( VAL );
        $("#call_status").val( VAL );
        $("#call_cp_lain").val( VAL );
        $("#call_telp_lain").val( VAL );
        $("#call_keterangan").val( VAL );
        
	$("#mode").val( 'insert' );
    }

    function edit_call ( ID, DATE, KATEGORI, STATUS, CPLAIN, TELPLAIN, KETERANGAN)
    {
        $("#call_idx").val( ID );
	$("#call_date").val( DATE );
	$("#call_kategori").val( KATEGORI );
        $("#call_status").val( STATUS );
        $("#call_cp_lain").val( CPLAIN );
        $("#call_telp_lain").val( TELPLAIN );
        $("#call_keterangan").val( KETERANGAN );
	$("#mode").val('edit');
	return false;
    }

    function remove_call ( VAL )
    {
	$('#call_'+VAL).remove();
        update_amount();
	return false;
    }
   //update_amount();
    });

</script>
<div class="page-header">
    <h2>Add New Schedule</h2>
</div>
<?php echo form_open(uri_string(),array('id'=>'formid', 'class'=>'form-horizontal'))?>
<table>
    <tr>
        <td><?php echo form_text('Corporate ID*','cus_corporate_id',(isset($data->cus_corporate_id))?$data->cus_corporate_id:'','class="span2" maxlength="10" id="sched_corporate_id"');?></td>
    </tr>
    <tr>
        <td><?php echo form_text('Nama Perusahaan / Nasabah','cus_nama_perusahaan',(isset($data->cus_nama_perusahaan))?$data->cus_nama_perusahaan:'','class="span2" maxlength="64" id="cus_nama_perusahaan"');?></td>
        <td>&nbsp;</td>
        <td><?php echo form_area('Contact Person','cus_cp',(isset($data->cus_cp))?$data->cus_cp:'','class="span3" maxlength="64" id="cus_cp"');?></td>
    </tr>
    <tr>
        <td><?php echo form_text('Kota','cus_wilayah',(isset($data->cus_wilayah))?$data->cus_wilayah:'','class="span2" maxlength="10" id="cus_wilayah"');?></td>
        <td>&nbsp;</td>
        <td><?php echo form_area('ALamat','cus_alamat',(isset($data->cus_alamat))?$data->cus_alamat:'','class="span3" maxlength="255"');?></td>
    </tr>
    <tr>
        <td><?php echo form_text('Telp Kantor ','cus_telepon_kantor',(isset($data->cus_telepon_kantor))?$data->cus_telepon_kantor:'','class="span2" maxlength="32" id="cus_telepon_kantor"');?></td>
        <td>&nbsp;</td>
        <td><?php echo form_text('Tipe Paket','pkt_tipe',(isset($data->pkt_tipe))?$data->pkt_tipe:'','class="span2" id="pkt_tipe"');?></td>
    </tr>
    <tr>
        <td><?php echo form_text('Telp Handphone ','cus_handphone',(isset($data->cus_handphone))?$data->cus_handphone:'','class="span2" maxlength="32" id="cus_handphone"');?></td>
        <td>&nbsp;</td>
        <td><?php echo form_text('Jenis Paket','pkt_jenis',(isset($data->pkt_jenis))?$data->pkt_jenis:'','class="span2" id="pkt_jenis"');?></td>
    </tr>
    <tr>
        <td><?php echo form_text('Telp Rumah ','cus_telepon_rumah',(isset($data->cus_telepon_rumah))?$data->cus_telepon_rumah:'','class="span2" maxlength="32" id="cus_telepon_rumah"');?></td>
        <td>&nbsp;</td>
        <td><?php echo form_text('Fitur Paket','pkt_fitur',(isset($data->pkt_fitur))?$data->pkt_fitur:'','class="span2" id="pkt_fitur"');?></td>
    </tr>
    <tr>
        <td><?php echo form_text('Tgl Koneksi','pkt_tanggal_koneksi',(isset($data->pkt_tanggal_koneksi))?$data->pkt_tanggal_koneksi:'','class="span2" maxlength="15" id="tgl"');?></td>
        <td>&nbsp;</td>
        <td><?php echo form_text('Schedule Date *','sched_date',(isset($data->sched_date))?$data->sched_date:'','class="span2" maxlength="25" id="sched_sched_date"');?></td> 
    </tr>
    <tr>
        <td><?php echo form_text('Tgl Terima Paket','pkt_tanggal_terima',(isset($data->pkt_tanggal_terima))?$data->pkt_tanggal_terima:'','class="span2" maxlength="15" id="tgl"');?></td>
        <td>&nbsp;</td>
        <td><?php echo form_text('Schedule Time *','sched_time',(isset($data->sched_time))?$data->sched_time:'','class="span2" maxlength="10"');?></td>
    </tr>
    <tr>
        <td><?php echo form_text('Tgl Due Date','pkt_jatuh_tempo',(isset($data->pkt_jatuh_tempo))?$data->pkt_jatuh_tempo:'','class="span2" maxlength="15" id="tgl"');?></td>
        <td>&nbsp;</td>
        <td><?php echo form_drop('Visit','sched_visit',$visit,(isset($data->sched_visit))?$data->sched_visit:'','class="span2"');?></td>
    </tr>
    <tr>
        <td>
            <div class="control-group">
		<label class="control-label" for="it_has_ed">Agenda Kunjungan</label>
		<div class="controls">
		    <input type="checkbox" name="agenda_kunj" <?php (isset($data->sched_agenda_kunjungan) && $data->sched_agenda_kunjungan==1)?' checked':'' ?>>  Key BCA Delivery<br>
		    <input type="checkbox" name="agenda_kunj" <?php (isset($data->sched_agenda_kunjungan) && $data->sched_agenda_kunjungan==1)?' checked':'' ?>>  VPN Setting & Instalation<br>
		    <input type="checkbox" name="agenda_kunj" <?php (isset($data->sched_agenda_kunjungan) && $data->sched_agenda_kunjungan==1)?' checked':'' ?>>  Tarining Pemakaian<br>
		    <input type="checkbox" name="agenda_kunj" <?php (isset($data->sched_agenda_kunjungan) && $data->sched_agenda_kunjungan==1)?' checked':'' ?>>  Training Sysadmin<br>
		    <input type="checkbox" name="agenda_kunj" <?php (isset($data->sched_agenda_kunjungan) && $data->sched_agenda_kunjungan==1)?' checked':'' ?>>  Training MAR<br>
		    <input type="checkbox" name="agenda_kunj" <?php (isset($data->sched_agenda_kunjungan) && $data->sched_agenda_kunjungan==1)?' checked':'' ?>>  Training MFTS Converter<br>
		    <input type="checkbox" name="agenda_kunj" <?php (isset($data->sched_agenda_kunjungan) && $data->sched_agenda_kunjungan==1)?' checked':'' ?>>  KBB Traouble Shooting
		</div>
	    </div>
        <?php //echo form_text('Agenda Kunjungan *','sched_agenda_kunjungan',(isset($data->sched_agenda_kunjungan))?$data->sched_agenda_kunjungan:'','class="span3" maxlength="10"');?>
        </td>
        <td>&nbsp;</td>
        <td><?php echo form_area('Alamat Kirim *','sched_alamat_kirim',(isset($data->sched_alamat_kirim))?$data->sched_alamat_kirim:'','class="span3" maxlength="10"');?></td>
    </tr>
</table>

<legend>Call Admin</legend>
   <div class="well form-inline">
    <table>
    <tr>
        <td>Nama Admin </td>
        <td><input type="text" name="adm_name" placeholder="adm_name" id="adm_name" class="span2"></td>
        <td>&nbsp;</td>
        <td>Call Date</td>
        <td><input type="text" name="call_date" placeholder="call_date" id="call_date" class="span2" value=""></td>
        <td>&nbsp;</td>
        <td>Kategori</td>
        <td>
            <select name="kategori" id="kategori" class="span2">
                <option>Dijawalkan</option>
                <option>Telp Tidak di angkat</option>
                <option>Tel Tidak Aktif</option>
            </select>
        </td>
        <td>&nbsp;</td>
        <td>Status</td>
        <td>
            <select name="status" id="status" class="span2">
                <option>Folow Up</option>
                <option>Aktif</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>&nbsp;</td>
    </tr>
    <tr>
        <td>CP Lain</td>
        <td><input type="text" name="cp_lain" placeholder="cp_lain" id="cp_lain" class="span2"></td>
        <td>&nbsp;</td>
        <td>Telp Lain</td>
        <td><input type="text" name="telp_lain" placeholder="telp_lain" id="telp_lain" class="span2"></td>
        <td>&nbsp;</td>
        <td>Keterangan</td>
        <td><textarea name="keterangan"></textarea></td>
    </tr>
    <tr>
        <td>&nbsp;</td>
        <td><?php echo form_button('insert-call','Insert','onclick="return insert_call()" class="btn"')?></td>
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
		<th width="20%">Keterangan</th>
                <th width="10%">&nbsp;</th>
	</tr>
      </thead>
      <tbody id="item">
      <?php
      if (@$call) { 
      for($i=0; $i<count($call); $i++)
      {
	echo '<tr id="key_'.$i.'">';
	echo '<td>'. $call[$i]->call_id .'<input type="hidden" name="item_key_sn[]" value="'. $key[$i]->call_id .'"></td>';
	echo '<td>'. $call[$i]->key_nama_user .'<input type="hidden" name="item_key_username[]" value="'. $key[$i]->key_nama_user .'"></td>';
	echo '<td>'. $call[$i]->call_id .'<input type="hidden" name="item_key_sn[]" value="'. $key[$i]->call_id .'"></td>';
	echo '<td>'. $call[$i]->key_nama_user .'<input type="hidden" name="item_key_username[]" value="'. $key[$i]->key_nama_user .'"></td>';
	echo '<td>'. $call[$i]->call_id .'<input type="hidden" name="item_key_sn[]" value="'. $key[$i]->call_id .'"></td>';
	echo '<td>'. $call[$i]->key_nama_user .'<input type="hidden" name="item_key_username[]" value="'. $key[$i]->key_nama_user .'"></td>';
        echo '<td><a href="" onclick="edit_key(\''.$i.
				'\', \''.$call[$i]->key_id.
				'\', \''.$call[$i]->key_nama_user.
				'\'); return false">E</a> | <a href="" onclick="remove_key(\''.$i.'\'); return false;">D</a></td>';
	echo "</tr>";
      } }
      ?>
      </tbody>
      <!--<tfoot>
	<tr>
		<th colspan="2" align="right">Total Key</th>
                <th><input type="text" name="pkt_jumlah_key" id="pkt_jumlah_key" readonly="readonly" style="width:100%"></th>
	</tr>
      </tfoot>
      -->
    </table>

    <p><code>Note: </code> &nbsp; All field mark with <code>*</code> are required.</p>
    <div class="form-actions">
        <?php echo form_submit('save','Save data', 'class="btn btn-primary"')?>
        <?php echo anchor($module[0],'Cancel', 'class="btn"')?>
        <?php if(isset($data->sched_id)): ?><div class="pull-right"><?php echo anchor($module[0].'/delete/'.$data->sched_id,'Delete User', 'class="btn btn-danger"')?></div><?php endif; ?>
    </div>
<?php echo form_close();?>