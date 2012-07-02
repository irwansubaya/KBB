<script src="<?php echo base_url()?>static/js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#formid").validate();
    });
</script>
<div class="page-header">
    <h2>Add New Admin</h2>
</div>
<?php echo form_open(uri_string(),array('id'=>'formid', 'class'=>'form-horizontal'))?>
<?php echo view_errors();?>
    <input type="hidden" name="adm_username_old" value="<?php echo (isset($data->adm_username))?$data->adm_username:'' ?>">
    <?php echo form_text('Name *','adm_name',(isset($data->adm_name))?$data->adm_name:'','class="span4" maxlength="25" autocomplete="off"');?>
    <?php echo form_text('Username *','adm_username',(isset($data->adm_username))?$data->adm_username:'','class="span4" maxlength="10" autocomplete="off"');?>
    <?php echo form_pass('Password *','adm_password',(isset($data->adm_password))?$data->adm_password:'','class="span4" maxlength="25"');?>
    <?php echo form_drop('Status','adm_status',array('Administrator'=>'Administrator','Operator'=>'Operator'),(isset($data->adm_status))?$data->adm_status:'','class="span2"');?>

    <p><code>Note: </code> &nbsp; All field mark with <code>*</code> are required.</p>
    <div class="form-actions">
        <?php echo form_submit('save','Save data', 'class="btn btn-primary"')?>
        <?php echo anchor($module[0],'Cancel', 'class="btn"')?>
        <?php if(isset($data->adm_id)): ?><div class="pull-right"><?php echo anchor($module[0].'/delete/'.$data->adm_id,'Delete User', 'class="btn btn-danger"')?></div><?php endif; ?>
    </div>
<?php echo form_close();?>