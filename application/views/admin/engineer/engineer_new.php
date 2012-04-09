<script src="<?php echo base_url()?>static/js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#formid").validate();
        $( "#tgl_lahir" ).datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'yy-mm-dd',
            maxDate: '-15y'
	});
    });
</script>
<div class="page-header">
    <h2>Add New Engineer</h2>
</div>
<?php echo form_open(uri_string(),array('id'=>'formid', 'class'=>'form-horizontal'))?>
    <?php echo form_text('Name SE *','se_nama',(isset($data->se_nama))?$data->se_nama:'','class="span2" maxlength="25"');?>
    <?php echo form_text('Tanggal Lahir*','se_tgl_lahir',(isset($data->se_tgl_lahir))?$data->se_tgl_lahir:'','class="span2" maxlength="12" id="tgl_lahir"');?>
    <?php echo form_area('Alamat*','se_alamat',(isset($data->se_alamat))?$data->se_alamat:'','class="span3" maxlength="255"');?>
    <?php echo form_text('NO KTP *','se_no_ktp',(isset($data->se_no_ktp))?$data->se_no_ktp:'','class="span2" maxlength="30"');?>
    <?php echo form_text('Telp Rumah ','se_telepon_rumah',(isset($data->se_telepon_rumah))?$data->se_telepon_rumah:'','class="span2" maxlength="12"');?>
    <?php echo form_text('Telp Handphone ','se_handphone',(isset($data->se_handphone))?$data->se_handphone:'','class="span2" maxlength="15"');?>

    <p><code>Note: </code> &nbsp; All field mark with <code>*</code> are required.</p>
    <div class="form-actions">
        <?php echo form_submit('save','Save data', 'class="btn btn-primary"')?>
        <?php echo anchor($module[0],'Cancel', 'class="btn"')?>
        <?php if(isset($data->se_id)): ?><div class="pull-right"><?php echo anchor($module[0].'/delete/'.$data->se_id,'Delete Customer', 'class="btn btn-danger"')?></div><?php endif; ?>
    </div>
<?php echo form_close();?>