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
    <input type="hidden" name="cab_code_old" value="<?php echo (isset($data->cab_code))?$data->cab_code:'' ?>">
    <?php echo view_errors();?>
    <?php echo form_text('Kode Cabang *','cab_code',(isset($data->cab_code))?$data->cab_code:'','class="span1" maxlength="5" autocomplete="off"');?>
    <?php echo form_text('Nama Cabang*','cab_name',(isset($data->cab_name))?$data->cab_name:'','class="span4" maxlength="55" autocomplete="off"');?>

    <p><code>Note: </code> &nbsp; All field mark with <code>*</code> are required.</p>
    <div class="form-actions">
        <?php echo form_submit('save','Save data', 'class="btn btn-primary"')?>
        <?php echo anchor($module[0],'Cancel', 'class="btn"')?>
        <?php if(isset($data->cab_idx)): ?><div class="pull-right"><?php echo anchor($module[0].'/delete/'.$data->cab_idx,'Delete Customer', 'class="btn btn-danger"')?></div><?php endif; ?>
    </div>
<?php echo form_close();?>