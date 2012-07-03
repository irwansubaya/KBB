<script src="<?php echo base_url()?>static/js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#formid").validate();
        $( "#tgl_lahir" ).datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd-M-yy',
            maxDate: '-15y'
	});
    });
</script>
<div class="page-header">
    <h2>Add New Engineer</h2>
</div>
<?php echo form_open(uri_string(),array('id'=>'formid', 'class'=>'form-horizontal'))?>
<?php echo view_errors();?>
    <input type="hidden" name="se_nama_old" value="<?php echo (isset($data->se_nama))?$data->se_nama:'' ?>">
    <?php echo form_text('Name SE *','se_nama',(isset($data->se_nama))?$data->se_nama:'','class="span4" maxlength="25" autocomplete="off"');?>
    <?php echo form_text('Tanggal Lahir*','se_tgl_lahir',(isset($data->se_tgl_lahir))?date('d-M-Y ',strtotime($data->se_tgl_lahir)):'','class="span4" autocomplete="off" id="tgl_lahir" readonly');?>
    <?php echo form_area('Alamat*','se_alamat',(isset($data->se_alamat))?$data->se_alamat:'','class="span4" maxlength="255" autocomplete="off"');?>
    <?php echo form_text('NO KTP *','se_no_ktp',(isset($data->se_no_ktp))?$data->se_no_ktp:'','class="span4" maxlength="30" autocomplete="off"');?>
    <?php echo form_text('Telp Rumah ','se_telepon_rumah',(isset($data->se_telepon_rumah))?$data->se_telepon_rumah:'','class="span4" maxlength="12" autocomplete="off"');?>
    <?php echo form_text('Telp Handphone ','se_handphone',(isset($data->se_handphone))?$data->se_handphone:'','class="span4" maxlength="15" autocomplete="off"');?>

    <p><code>Note: </code> &nbsp; All field mark with <code>*</code> are required.</p>
    <div class="form-actions">
        <?php echo form_submit('save','Save data', 'class="btn btn-primary"')?>
        <?php echo anchor($module[0],'Cancel', 'class="btn"')?>
        <?php if(isset($data->se_id)): ?><div class="pull-right"><?php echo anchor($module[0].'/delete/'.$data->se_id,'Delete Customer', 'class="btn btn-danger"')?></div><?php endif; ?>
    </div>
<?php echo form_close();?>