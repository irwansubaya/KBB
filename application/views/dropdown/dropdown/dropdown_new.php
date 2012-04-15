<script src="<?php echo base_url()?>static/js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#formid").validate();
    });
    $(document).ready(function()
    {
        $("#btnselectflower").click(function(){
            $("selectflower1").append($("<option>" + $('#txtenterflower').val()+ "</option>"));
                                        return false;
        });
    });
</script>
<div class="page-header">
    <h2>Add New Admin</h2>
</div>
<?php echo form_open(uri_string(),array('id'=>'formid', 'class'=>'form-horizontal'))?>
    <?php echo form_text('Name *','adm_name',(isset($data->adm_name))?$data->adm_name:'','class="span2" maxlength="25"');?>
    <?php echo form_text('Username *','adm_username',(isset($data->adm_username))?$data->adm_username:'','class="span2" maxlength="25"');?>
    <?php echo form_pass('Password *','adm_password',(isset($data->adm_password))?$data->adm_password:'','class="span2" maxlength="25"');?>
    <select id="selectflower1" name="selectflower">
        <option>administrator</option>
        <option>supervisor</option>
        <option>operator</option>
    </select>
    <input id="txtenterflower" type="text">
    <input id="btnselectflower" type="submit" value="button" onclick=:function();">
    
    <p><code>Note: </code> &nbsp; All field mark with <code>*</code> are required.</p>
    <div class="form-actions">
        <?php echo form_submit('save','Save data', 'class="btn btn-primary"')?>
        <?php echo anchor($module[0],'Cancel', 'class="btn"')?>
        <?php if(isset($data->adm_id)): ?><div class="pull-right"><?php echo anchor($module[0].'/delete/'.$data->adm_id,'Delete User', 'class="btn btn-danger"')?></div><?php endif; ?>
    </div>
<?php echo form_close();?>