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
    });
</script>
<div class="page-header">
    <h2>Add New Customer</h2>
</div>
<?php echo form_open(uri_string(),array('id'=>'formid', 'class'=>'form-horizontal'))?>
<?php echo view_errors();?>
<table>
    <tr>
        <td>
	    <input type="hidden" name="cus_corporate_id_old" value="<?php echo (isset($data->cus_corporate_id))?$data->cus_corporate_id:'' ?>">
	    <?php echo form_text('Corporate ID*','cus_corporate_id',(isset($data->cus_corporate_id))?$data->cus_corporate_id:'','class="span2" maxlength="10" autocomplete="off"');?>
	</td>
    </tr>
    <tr>
        <td><?php echo form_text('Nama Perusahaan / Nasabah*','cus_nama_perusahaan',(isset($data->cus_nama_perusahaan))?$data->cus_nama_perusahaan:'','class="span3" maxlength="64" autocomplete="off"');?></td>
        <td><?php echo form_text('No KTP','cus_no_ktp',(isset($data->cus_no_ktp))?$data->cus_no_ktp:'','class="span2" maxlength="64" autocomplete="off"');?></td>
    </tr>
    <tr>
        <td><?php echo form_text('No Rekening *','cus_no_rekening',(isset($data->cus_no_rekening))?$data->cus_no_rekening:'','class="span2" maxlength="10" autocomplete="off"');?></td>
        <td><?php echo form_drop('Bidang Usaha','cus_bidang_usaha',$bidus,(isset($data->cus_bidang_usaha))?$data->cus_bidang_usaha:'','class="span3"');?></td>
    </tr>
    <tr>
        <td><?php echo form_area('ALamat *','cus_alamat',(isset($data->cus_alamat))?$data->cus_alamat:'','class="span3 maxlength="255" autocomplete="off"');?></td>
        <td><?php echo form_area('Nama User / PIC*','cus_cp',(isset($data->cus_cp))?$data->cus_cp:'','class="span3" maxlength="64" autocomplete="off"');?></td>
    </tr>
    <tr>
        <td>
            <?php echo form_drop('Kota','cus_kota',$kota,(isset($data->cus_kota))?$data->cus_kota:'','class="span3"');?>
        <?php //echo form_text('Kota *','cus_kota',(isset($data->cus_kota))?$data->cus_kota:'','class="span2"');?></td>
        <td><?php echo form_text('Kode Pos ','cus_kodepos',(isset($data->cus_kodepos))?$data->cus_kodepos:'','class="span1" maxlength="5" autocomplete="off"');?></td>
    </tr>
    <tr>
        <td><?php echo form_text('Telp Kantor ','cus_telepon_kantor',(isset($data->cus_telepon_kantor))?$data->cus_telepon_kantor:'','class="span2" maxlength="32" autocomplete="off"');?></td>
        <td><?php echo form_text('Telp Rumah ','cus_telepon_rumah',(isset($data->cus_telepon_rumah))?$data->cus_telepon_rumah:'','class="span2" maxlength="32" autocomplete="off"');?></td>
    </tr>
    <tr>
        <td><?php echo form_text('Telp Handphone ','cus_handphone',(isset($data->cus_handphone))?$data->cus_handphone:'','class="span2" maxlength="32" autocomplete="off"');?></td>
        <td><?php echo form_text('Telp Fax','cus_no_fax',(isset($data->cus_no_fax))?$data->cus_no_fax:'','class="span2" maxlength="32" autocomplete="off"');?></td>
    </tr>
    <tr>
        <td><?php echo form_text('Kode Cabang','cus_kode_cabang',(isset($data->cus_kode_cabang))?$data->cus_kode_cabang:'','class="span1" maxlength="4" id="cus_kode_cabang" autocomplete="off"');?></td>
        <td><?php echo form_text('Cabang','cus_cabang','','class="span2" maxlength="64" readonly id="cab_name"');?></td>
    </tr>
    <tr>
        <td><?php echo form_text('Email *','cus_email',(isset($data->cus_email))?$data->cus_email:'','class="span3" maxlength="64" autocomplete="off"');?></td>
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