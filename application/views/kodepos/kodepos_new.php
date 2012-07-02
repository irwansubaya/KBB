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
    <input type="hidden" name="se_nama_old" value="<?php echo (isset($data->se_nama))?$data->se_nama:'' ?>">
    <?php echo form_text('No Kodepos *','kodepos_no',(isset($data->kodepos_no))?$data->kodepos_no:'','class="span1" maxlength="5" autocomplete="off"');?>
    <?php echo form_text('Kelurahan*','kodepos_kel',(isset($data->kodepos_kel))?$data->kodepos_kel:'','class="span4" maxlength="55" autocomplete="off"');?>
    <?php echo form_text('Kecamatan*','kodepos_kec',(isset($data->kodepos_kec))?$data->kodepos_kec:'','class="span4" maxlength="30" autocomplete="off"');?>
    <?php echo form_text('Kota*','kodepos_kota',(isset($data->kodepos_kota))?$data->kodepos_kota:'','class="span4" maxlength="32" autocomplete="off"');?>

    <p><code>Note: </code> &nbsp; All field mark with <code>*</code> are required.</p>
    <div class="form-actions">
        <?php echo form_submit('save','Save data', 'class="btn btn-primary"')?>
        <?php echo anchor($module[0],'Cancel', 'class="btn"')?>
        <?php if(isset($data->se_id)): ?><div class="pull-right"><?php echo anchor($module[0].'/delete/'.$data->se_id,'Delete Customer', 'class="btn btn-danger"')?></div><?php endif; ?>
    </div>
<?php echo form_close();?>