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
   
   //update_amount();
    });

</script>
<div class="page-header">
    <h2>Add New Schedule</h2>
</div>
<?php echo form_open(uri_string(),array('id'=>'formid', 'class'=>'form-horizontal'))?>
<table>
    <tr>
        <td><?php echo form_hidden('cus_idx','', 'id=cus_idx');?></td>
        <td><?php echo form_hidden('pkt_idx','', 'id=pkt_idx');?> </td>
    </tr>
    <tr>
        <td><?php echo form_text('Corporate ID*','cus_corporate_id',(isset($data->cus_corporate_id))?$data->cus_corporate_id:'','class="span2" maxlength="10" id="sched_corporate_id"');?></td>
    </tr>
    <tr>
        <td><?php echo form_text('Nama Perusahaan / Nasabah*','cus_nama_perusahaan',(isset($data->cus_nama_perusahaan))?$data->cus_nama_perusahaan:'','class="span2" maxlength="64" id="cus_nama_perusahaan"');?></td>
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
        <td><?php echo form_text('PIC Lain','pkt_jatuh_tempo',(isset($data->pkt_jatuh_tempo))?$data->pkt_jatuh_tempo:'','class="span2" maxlength="15" id="tgl"');?></td>
        <td>&nbsp;</td>
        <td><?php echo form_text('Telp Lain*','sched_time',(isset($data->sched_time))?$data->sched_time:'','class="span2" maxlength="10"');?></td>
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
    <p><code>Note: </code> &nbsp; All field mark with <code>*</code> are required.</p>
    <div class="form-actions">
        <?php echo form_submit('save','Save data', 'class="btn btn-primary"')?>
        <?php echo anchor($module[0],'Cancel', 'class="btn"')?>
        <?php if(isset($data->sched_id)): ?><div class="pull-right"><?php echo anchor($module[0].'/delete/'.$data->sched_id,'Delete User', 'class="btn btn-danger"')?></div><?php endif; ?>
    </div>
<?php echo form_close();?>