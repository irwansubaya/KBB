<script src="<?php echo base_url()?>static/js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#formid").validate();
	$("#sched_date").datepicker({
	    dateFormat: 'dd-M-yy',
	    showAnim: 'fold',
	    minDate: '-2m',
	    maxDate:'+2m',
	    showAnim: 'fold'
	});
	$("#resolve_date").datepicker({
		dateFormat: 'dd-M-yy',
		showAnim: 'fold',
                minDate: '-2m',
                maxDate:'+2m',
		onClose: function(dateText, inst)
		{
		    if (Date.parse(dateText) < Date.parse($("#pkt_tanggal_koneksi").val()))
		    {
			alert('Tanggal terima paket tidak boleh sebelum tanggal koneksi');
			$("#resolve_date").val('');
			$("#resolve_date").focus();
			return false;
		    }
		    var dateText = Date.parse(dateText);		                        
		}
	});
        /*$('#date_time').datetimepicker({
            dateFormat: 'dd-M-yy ',
	    minDate: '-2m',
            maxDate:'+2m',
	    showAnim: 'fold'	    
            });
	*/
	$('#myModal').modal('show')
    });
    
    function dontEnter(evt) { 
    var evt = (evt) ? evt : ((event) ? event : null); 
      var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null); 
      if ((evt.keyCode == 13) && (node.type=="text"))  {return false;} 
    } 
    document.onkeypress = dontEnter;
</script>
<?php
//echo "<pre>";
//var_dump($data[0]);
//echo "</pre>";
?>
<?php echo form_open(uri_string(),array('id'=>'formid', 'class'=>'form-horizontall'))?>
<?php echo view_errors();?>
<?php echo form_hidden('sched_idx',$data[0]->sched_idx);?>
<?php echo form_hidden('cus_idx',$data[0]->cus_idx);?>
<?php echo form_hidden('pkt_idx',$data[0]->pkt_idx);?>
<div class="modal hide" id="myModal">
    <div class="modal-header">	
	<!--<button type="button" class="close" data-dismiss="modal">X</button>-->
	<h4>Schedule for Customer :<?php echo '['.$cus->cus_corporate_id.'] '.$cus->cus_nama_perusahaan ?></h4>
    </div>    
    <div class="modal-body">
	<table>
	    <tr>
		<td><?php echo form_text('Schedule Date','sched_date',(isset($data[0]->sched_date))?date('d-M-Y',strtotime($data[0]->sched_date)):'','class="span3" id="sched_date" autocomplete="off" readonly');?></td>
		<td><?php echo form_text('Schedule time','sched_time',(isset($data[0]->sched_time))?$data[0]->sched_time:'','class="span3" autocomplete="off" readonly');?></td>
	    </tr>
	    <tr>
		<td><?php echo form_text('Visit','sched_visit',(isset($data[0]->sched_visit))?$data[0]->sched_visit:'','class="span2" readonly');?></td>
		<td><?php echo form_drop('Status','sched_status',$status,(isset($data[0]->sched_status))?$data[0]->sched_status:'','class="span2"');?></td>
	    </tr>
	    <tr>
		<td><?php echo form_text('Resolve Date','sched_resolve_date',(isset($data[0]->sched_resolve_date)&& $data[0]->sched_resolve_date!='0000-00-00')?date('d-M-Y',strtotime($data[0]->sched_resolve_date)):'','class="span3" id="resolve_date" autocomplete="off"');?></td>
		<td><?php echo form_drop('Engineer','sched_engineer',$engineer,(isset($data[0]->sched_engineer))?$data[0]->sched_engineer:'','class="span2"');?></td>
	    <tr>
		<td><?php echo form_area('Keterangan','sched_keterangan',(isset($data[0]->sched_keterangan)&& $data[0]->sched_keterangan!='0')?$data[0]->sched_keterangan:'','class="span4" autocomplete="off"');?></td>
	    </tr>
	</table>
    </div>
    
    <div class="modal-footer">
	<?php echo form_submit('save','Save data', 'class="btn btn-primary"')?>
	<?php echo anchor($this->module[0] . '/schedule_list/'.$data[0]->cus_idx.'/'.$data[0]->pkt_idx,'Back to List Paket', 'class="btn"')?>
    </div>
</div>

<?php echo form_close();?>
