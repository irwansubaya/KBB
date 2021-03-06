<script src="<?php echo base_url()?>static/js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
	$("#formid").validate();
	$('#cus_kode_cabang').autocomplete('<?php echo base_url()?>customer/customer/cabang_ajax',{
                     parse: function(data){
                         var parsed = [];
                         for (var i=0; i < data.length; i++) {
                             parsed[i] = { data: data[i], value: data[i].cab_code };
                         }
                         return parsed;
                     },
                     formatItem: function(data,i,max){
                         return  '<div class="search_content"><bold> '+data.cab_code+' </bold> &nbsp;<small>'+data.cab_name+'</small></div>';
                     },
                     width: 450, 
                     dataType: 'json' 
                 }).result( 
                         function(event,data,formated){
                             $('#cus_kode_cabang').val(data.cab_code);
                             $('#cab_name').val(data.cab_name);
                     }
             );
	
	$('#cus_bidus').autocomplete('<?php echo base_url()?>customer/customer/bidus_ajax',{
                     parse: function(data){
                         var parsed = [];
                         for (var i=0; i < data.length; i++) {
                             parsed[i] = { data: data[i], value: data[i].bid_name };
                         }
                         return parsed;
                     },
                     formatItem: function(data,i,max){
                         return  '<div class="search_content"><bold> '+data.bid_name+' </bold></div>';
                     },
                     width: 450, 
                     dataType: 'json' 
                 }).result( 
                         function(event,data,formated){
                             //$('#cus_bidus').val(data.bid_idx);
                             $('#cus_bidus').val(data.bid_name);
                     }
             );
	
	$('#cus_kode_pos').autocomplete('<?php echo base_url()?>customer/customer/kodepos_ajax',{
                     parse: function(data){
                         var parsed = [];
                         for (var i=0; i < data.length; i++) {
                             parsed[i] = { data: data[i], value: data[i].kodepos_no };
                         }
                         return parsed;
                     },
                     formatItem: function(data,i,max){
                         return  '<div class="search_content"><bold> '+data.kodepos_no+' </bold> &nbsp;<small>'+data.kodepos_kota+'</small></div>';
                     },
                     width: 450, 
                     dataType: 'json' 
                 }).result( 
                         function(event,data,formated){
                             $('#cus_kode_pos').val(data.kodepos_no);
                             $('#cus_kota').val(data.kodepos_kota);
                             $('#cus_kec').val(data.kodepos_kec);
                             $('#cus_kel').val(data.kodepos_kel);
                     }
             );
    });
    function dontEnter(evt) { 
    var evt = (evt) ? evt : ((event) ? event : null); 
        var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null); 
        if ((evt.keyCode == 13) && (node.type=="text"))  {return false;} 
      } 
      document.onkeypress = dontEnter;
</script>
<div class="page-header">
    <h2>Detail Customer : <?php echo '['.$data->cus_corporate_id.'] '.$data->cus_nama_perusahaan ?></h2>
</div>
<div class="tabbable" style="margin-bottom: 9px;">
    <ul class="nav nav-tabs">
	<li<?php echo ($action == 'detail')?' class="active"':'' ?>><?php echo anchor($module[0].'/update/detail/'.$data->cus_idx,'Customer')?></li>
	<li<?php echo ($action == 'paket')?' class="active"':'' ?>><?php echo anchor($module[0].'/update/paket/'.$data->cus_idx,'Paket & Key')?></li>
    </ul>
    <div class="tab-content">
	<?php echo form_open(uri_string(),array('id'=>'formid', 'class'=>'form-horizontal'))?>
	<?php echo view_errors();?>
	<table>
	    <tr>
		<td>		    
		    <?php echo form_text('Corporate ID*','cus_corporate_id',(isset($data->cus_corporate_id))?$data->cus_corporate_id:'','class="span3" maxlength="10" autocomplete="off" tabindex="1"');?>
		</td>
	    </tr>
	    <tr>
		<td><?php echo form_text('Nama Perusahaan / Nasabah*','cus_nama_perusahaan',(isset($data->cus_nama_perusahaan))?$data->cus_nama_perusahaan:'','class="span4" maxlength="64" tabindex="2" autocomplete="off"');?></td>
		<td><?php echo form_text('No KTP','cus_no_ktp',(isset($data->cus_no_ktp))?$data->cus_no_ktp:'','class="span3" maxlength="64" tabindex="3"');?></td>
	    </tr>
	    <tr>
		<td><?php echo form_text('No Rekening *','cus_no_rekening',(isset($data->cus_no_rekening))?$data->cus_no_rekening:'','class="span2" maxlength="10" tabindex="4" autocomplete="off"');?></td>
        <td><?php echo form_text('Bidang Usaha','cus_bidang_usaha',(isset($data->cus_bidang_usaha))?$data->cus_bidang_usaha:'','class="span3" id="cus_bidus" tabindex="5" tabindex="5"');?></td>
	    </tr>
	    <tr>
		<td><?php echo form_area('ALamat *','cus_alamat',(isset($data->cus_alamat))?$data->cus_alamat:'','class="span4" maxlength="255" autocomplete="off" tabindex="6"');?></td>
		<td><?php echo form_area('Nama User / PIC*','cus_cp',(isset($data->cus_cp))?$data->cus_cp:'','class="span4" autocomplete="off" tabindex="7"');?></td>
	    </tr>
	    <tr>
		<td>
		    <?php echo form_text('Kode Pos ','cus_kodepos',(isset($data->cus_kodepos))?$data->cus_kodepos:'','class="span1" maxlength="5" id="cus_kode_pos" autocomplete="off" tabindex="8"');?>
		</td>
		<td>
		    <?php echo form_text('Kecamatan','cus_kec',(isset($data->cus_kec))?$data->cus_kec:'','class="span4" maxlength="64" readonly id="cus_kec"');?>
		</td>
	    <tr>
		<td>
		    <?php //echo form_drop('Kota','cus_kota',$kota,(isset($data->cus_kota))?$data->cus_kota:'','class="span2"');?>
		    <?php echo form_drop('Kota','cus_kota',$kota,(isset($data->cus_kota))?$data->cus_kota:'','class="span2" id="cus_kota"');?>
		    <?php //echo form_text('Kota','cus_kota',(isset($data->cus_kota))?$data->cus_kota:'','class="span2" id="cus_kota"');?>
		</td>
		<td>
		    <?php echo form_text('Kelurahan','cus_kel',(isset($data->cus_kel))?$data->cus_kel:'','class="span4" maxlength="64" readonly id="cus_kel"');?>
		</td>
	    </tr>
	    <tr>
		<td><?php echo form_text('Telp Kantor ','cus_telepon_kantor',(isset($data->cus_telepon_kantor))?$data->cus_telepon_kantor:'','class="span4" maxlength="32" autocomplete="off" tabindex="9"');?></td>
		<td><?php echo form_text('Telp Rumah ','cus_telepon_rumah',(isset($data->cus_telepon_rumah))?$data->cus_telepon_rumah:'','class="span4" maxlength="32" autocomplete="off" tabindex="10"');?></td>
	    </tr>
	    <tr>
		<td><?php echo form_text('Telp Handphone ','cus_handphone',(isset($data->cus_handphone))?$data->cus_handphone:'','class="span4" maxlength="32" autocomplete="off" tabindex="11"');?></td>
		<td><?php echo form_text('Telp Fax','cus_no_fax',(isset($data->cus_no_fax))?$data->cus_no_fax:'','class="span4" maxlength="32" autocomplete="off" tabindex="12"');?></td>
	    </tr>
	    <tr>
		<td><?php echo form_text('Kode Cabang','cus_kode_cabang',(isset($data->cus_kode_cabang))?$data->cus_kode_cabang:'','class="span1" id="cus_kode_cabang"autocomplete="off" tabindex="13"');?></td>
		<td><?php echo form_text('Cabang','cus_cabang',(isset($data->cus_cabang))?$data->cus_cabang:'','class="span4" id="cab_name" readonly');?></td>
	    </tr>
	    <tr>
		<td><?php echo form_text('Email *','cus_email',(isset($data->cus_email))?$data->cus_email:'','class="span4" maxlength="64" autocomplete="off" tabindex="14"');?></td>
		<td></td>
	    </tr>
	</table>
	<p><code>Note: </code> &nbsp; All field mark with <code>*</code> are required.</p>
	<div class="form-actions">
	    <?php echo form_submit('save','Save changes', 'class="btn btn-primary" tabindex="15"')?>
	    <?php echo anchor($module[0],'Cancel', 'class="btn"')?>
	    <?php if(isset($data->cus_idx)): ?><div class="pull-right"><?php echo anchor($module[0].'/delete/'.$data->cus_idx,'Delete Customer', 'class="btn btn-danger"')?></div><?php endif; ?>
	</div>
	<?php echo form_close();?>
    </div>
</div>


