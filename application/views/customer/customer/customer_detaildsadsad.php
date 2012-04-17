<script src="<?php echo base_url()?>static/js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#formid").validate();
        $("#pkt_tanggal_koneksi").datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: 'dd-M-yy',
		showAnim: 'fold'
	});
        $("#pkt_tanggal_terima").datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: 'dd-M-yy',
		showAnim: 'fold'
	});
        $('#pkt_corporate_id').autocomplete('<?php echo base_url()?>customer/paket/customer_ajax',{
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
    	    });
	
        update_amount();
	
	$("#pkt_jatuh_tempo").focus(function(){
            var due_date = new Date($("#pkt_tanggal_terima").val());
                if(Date.parse(due_date)) {
                var due_date = new Date().setDate(due_date.getDate()+2);
                var due_date = new Date(due_date);
                var due_date = due_date.toLocaleFormat('%Y-%m-%d');
                $("#pkt_jatuh_tempo").val(due_date);
            }
        });
    });
    
    var id = 0;
    function insert_key ()
    {
	if ($("#key_sn").val() == '') {alert ('Please fill SN'); $("#key_sn").focus()}
	else if ($("#key_username").val() == '') {alert ('Please fill username'); $("#key_username").focus()}
	else insert_key_print ();
    }

    function insert_key_print ()
    {
	$string = '<tr id="key_'+id+'">'+
		    '<td>'+$("#key_sn").val()+'<input type="hidden" name="item_key_sn[]" value="'+$("#key_sn").val()+'">'+
		    '<td>'+$("#key_username").val()+'<input type="hidden" name="item_key_username[]" value="'+$("#key_username").val()+'"></td>'+
		    '<td><a href="" onclick="edit_key(\''+id+
						    '\', \''+$("#key_sn").val()+
						    '\', \''+$("#key_username").val()+
						    '\'); return false">E</a> | <a href="" onclick="remove_key(\''+id+'\'); return false;">D</a></td>'+
		   '</tr>';
	if ( $("#mode").val() == 'insert')
	{
	    $('#item').append( $string );
	}
	else {
	    $('tr#key_'+$("#id_key").val()).replaceWith($string);
	}
	id++;
	set_key ('');
	update_amount();
    }

    function set_key ( VAL )
    {
	$("#key_sn").val( VAL );
	$("#key_username").val( VAL );
	$("#mode").val( 'insert' );
    }

    function edit_key ( ID, SN, USERNAME)
    {
        $("#id_key").val( ID );
	$("#key_sn").val( SN );
	$("#key_username").val( USERNAME );
	$("#mode").val('edit');
	return false;
    }

    function remove_key ( VAL )
    {
	$('#key_'+VAL).remove();
        update_amount();
	return false;
    }

    function update_amount()
    {
        var rows = $("#key_list >tbody tr").length;
        $("#pkt_jumlah_key").val(rows);
    }
</script>
<div class="page-header">
    <h2>Detail Customer : <?php echo '['. $data[0]->cus_corporate_id . '] ' . $data[0]->cus_nama_perusahaan ?></h2>
</div>
<div class="tabbable" style="margin-bottom: 9px;">
    <ul class="nav nav-tabs">
	<li<?php echo ($action == 'customer')?' class="active"':'' ?>><?php echo anchor($module[0].'/update/customer/'.$data[0]->pkt_idx,'customer')?></li>
	<li<?php echo ($action == 'paket')?' class="active"':'' ?>><?php echo anchor($module[0].'/update/paket/'.$data[0]->pkt_idx,'paket')?></li>
	<li<?php echo ($action == 'key')?' class="active"':'' ?>><?php echo anchor($module[0].'/update/key/'.$data[0]->pkt_idx,'key')?></li>
    </ul>
    <div class="tab-content">
        <?php if ($action == 'customer'): ?>
	    <?php echo form_open(uri_string(),array('id'=>'formid', 'class'=>'form-horizontal'))?>
	    <?php echo view_errors();?>
	    <table>
		<tr>
		    <td>
		    <input type="hidden" name="cus_corporate_id_old" value="<?php echo (isset($data->cus_corporate_id))?$data->cus_corporate_id:'' ?>">
		    <?php echo form_text('Corporate ID*','cus_corporate_id',(isset($data->cus_corporate_id))?$data->cus_corporate_id:'','class="span2" maxlength="10"');?>
		    </td>
		</tr>
		<tr>
		    <td><?php echo form_text('Nama Perusahaan / Nasabah*','cus_nama_perusahaan',(isset($data->cus_nama_perusahaan))?$data->cus_nama_perusahaan:'','class="span3" maxlength="64"');?></td>
		    <td><?php echo form_text('No KTP','cus_no_ktp',(isset($data->cus_no_ktp))?$data->cus_no_ktp:'','class="span3" maxlength="64"');?></td>
		</tr>
		<tr>
		    <td><?php echo form_text('No Rekening *','cus_no_rekening',(isset($data->cus_no_rekening))?$data->cus_no_rekening:'','class="span2" maxlength="10"');?></td>
		    <td><?php echo form_drop('Bidang Usaha','cus_bidang_usaha',$bidus,(isset($data->cus_bidang_usaha))?$data->cus_bidang_usaha:'','class="span3"');?></td>
		</tr>
		<tr>
		    <td><?php echo form_area('ALamat *','cus_alamat',(isset($data->cus_alamat))?$data->cus_alamat:'','class="span3 maxlength="255"');?></td>
		    <td><?php echo form_area('Contact Person *','cus_cp',(isset($data->cus_cp))?$data->cus_cp:'','class="span3" maxlength="64"');?></td>
		</tr>
		<tr>
		    <td>
			<?php echo form_drop('Kota','cus_kota',$kota,(isset($data->cus_kota))?$data->cus_kota:'','class="span3"');?>
		    <?php //echo form_text('Kota *','cus_kota',(isset($data->cus_kota))?$data->cus_kota:'','class="span2"');?></td>
		    <td><?php echo form_text('Kode Pos ','cus_kodepos',(isset($data->cus_kodepos))?$data->cus_kodepos:'','class="span1" maxlength="5"');?></td>
		</tr>
		<tr>
		    <td><?php echo form_text('Telp Kantor ','cus_telepon_kantor',(isset($data->cus_telepon_kantor))?$data->cus_telepon_kantor:'','class="span2" maxlength="32"');?></td>
		    <td><?php echo form_text('Telp Rumah ','cus_telepon_rumah',(isset($data->cus_telepon_rumah))?$data->cus_telepon_rumah:'','class="span2" maxlength="32"');?></td>
		</tr>
		<tr>
		    <td><?php echo form_text('Telp Handphone ','cus_handphone',(isset($data->cus_handphone))?$data->cus_handphone:'','class="span2" maxlength="32"');?></td>
		    <td><?php echo form_text('Telp Fax','cus_no_fax',(isset($data->cus_no_fax))?$data->cus_no_fax:'','class="span2" maxlength="32"');?></td>
		</tr>
		<tr>
		    <td><?php echo form_text('Kode Cabang','cus_kode_cabang',(isset($data->cus_kode_cabang))?$data->cus_kode_cabang:'','class="span1" maxlength="32"');?></td>
		    <td><?php echo form_drop('Cabang','cus_cabang',$cabang,(isset($data->cus_cabang))?$data->cus_cabang:'','class="span3"');?></td>
		</tr>
		<tr>
		    <td><?php echo form_text('Email *','cus_email',(isset($data->cus_email))?$data->cus_email:'','class="span3" maxlength="64"');?></td>
		    <td></td>
		</tr>		
	    </table>
		<p><code>Note: </code> &nbsp; All field mark with <code>*</code> are required.</p>
		<div class="form-actions">
		    <?php echo form_submit('save','Save changes', 'class="btn btn-primary"')?>
		    <?php echo anchor($module[0],'Cancel', 'class="btn"')?>
		    <?php if(isset($data->cus_idx)): ?><div class="pull-right"><?php echo anchor($module[0].'/delete/'.$data->cus_idx,'Delete Customer', 'class="btn btn-danger"')?></div><?php endif; ?>
		</div>
	    <?php echo form_close();?>
	<?php elseif ($action == 'paket'): ?>
	    
	    <?php echo form_open(uri_string(),array('id'=>'formid', 'class'=>'form-horizontal'))?>
	    <?php echo validation_errors();?>
		<?php echo form_hidden('cus_idx',(isset($data[0]->cus_idx))?$data[0]->cus_idx:'', 'id=cus_idx');?>    
		<?php echo form_text('Corporate ID *','cus_corporate_id',(isset($data[0]->cus_corporate_id[0]))?$data[0]->cus_corporate_id:'','class="span2" maxlength="10" id="pkt_corporate_id"');?>
		<?php echo form_text('Name Perusahaan*','cus_nama_perusahaan',(isset($data[0]->cus_nama_perusahaan))?$data[0]->cus_nama_perusahaan:'','class="span3" maxlength="64" id ="cus_nama_perusahaan"');?>
		<?php echo form_area('Contact Person *','cus_cp',(isset($data[0]->cus_cp))?$data[0]->cus_cp:'','class="span3" maxlength="64"');?>
		<?php echo form_drop('Tipe Paket *','pkt_jenis',array('single_otorisasi'=>'Single Otorisasi','multi_otorisasi'=>'Multi Otorisasi'),(isset($data[0]->pkt_jenis))?$data[0]->pkt_jenis:'','class="span2"');?>
		<?php echo form_drop('Jenis Paket *','pkt_tipe',array('gold'=>'Gold','gold_payroll'=>'Gold Payroll','platinum'=>'Platinum'),(isset($data[0]->pkt_tipe))?$data[0]->pkt_tipe:'','class="span2"');?>
		<?php echo form_drop('Fitur Paket *','pkt_fitur',array(
								       'va'=>'Virtual Account',
								       'bca_va'=>'BCA Virtual Account',
								       'payroll'=>'Payroll',
								       'b2b_pertamina'=>'B2B Pertamina',
								       'b2b_ecommerce'=>'B2B E-Commerce',
								       'mar'=>'MAR',
								       'sysadmin'=>'Sysadmin',
								       ),(isset($data[0]->pkt_fitur))?$data[0]->pkt_fitur:'','class="span2"');?>
		<?php echo form_text('Tgl Koneksi*','pkt_tanggal_koneksi',(isset($data[0]->pkt_tanggal_koneksi))?$data[0]->pkt_tanggal_koneksi:'','class="span2" maxlength="15" id="pkt_tanggal_koneksi"');?>    
		<?php echo form_text('Tgl Terima Paket*','pkt_tanggal_terima',(isset($data[0]->pkt_tanggal_terima))?$data[0]->pkt_tanggal_terima:'','class="span2" maxlength="15" id="pkt_tanggal_terima"');?>    
		<?php echo form_text('Tgl Due Date*','pkt_jatuh_tempo',(isset($data[0]->pkt_jatuh_tempo))?$data[0]->pkt_jatuh_tempo:'','class="span2" maxlength="15" id="pkt_jatuh_tempo"');?>  
		    
	    <p><code>Note: </code> &nbsp; All field mark with <code>*</code> are required.</p>
	    <div class="form-actions">
		<?php echo form_submit('save','Save data', 'class="btn btn-primary"')?>
		<?php echo anchor($module[0],'Cancel', 'class="btn"')?>
		<?php if(isset($data[0]->pkt_idx)): ?><div class="pull-right"><?php echo anchor($module[0].'/delete/'.$data[0]->pkt_idx,'Delete Paket', 'class="btn btn-danger"')?></div><?php endif; ?>
	    </div>
	<?php echo form_close();?>
	<?php elseif ($action == 'call'): ?>
        call
	<?php endif; ?>
    </div>
</div>


