<script src="<?php echo base_url()?>static/js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#formid").validate();
		$("#resolve_date").datepicker({
		    changeMonth: true,
		    changeYear: true,
		    dateFormat: 'dd-M-yy DD',
		    showAnim: 'fold',
		    minDate: '-2m',
		    maxDate:'+2m',
		    showAnim: 'fold'
	});
        $('#date_time').datetimepicker({
            dateFormat: 'dd-M-yy ',
	    changeMonth: true,
	    changeYear: true,
	    minDate: '-2m',
            maxDate:'+2m',
	    showAnim: 'fold'	    
            });
	$('#myModal').modal('show')
    });

    var id = 0;
    function insert_call ()
    {
        if ($("#call_konfirm").val() == '') {alert ('Please fill respon'); $("#call_konfirm").focus()}
	else insert_call_print ();
    }

    function insert_call_print ()
    {
	if($("#call_konfirm").val() == 'Di Jadwalkan')
	{
            $("#call_status").val('Active');
            $("#pkt_konfirm").val('Active');
           
	}
        else
        $("#call_status").val('Folow Up');
        $("#pkt_konfirm").val('Folow Up');
        
	$string = '<tr id="call_'+id+'">'+
		    '<td>'+$("#call_nama_admin").val()+'<input type="hidden" name="item_call_nama_admin[]" value="'+$("#call_nama_admin").val()+'"></td>'+
		    '<td>'+$("#call_date").val()+'<input type="hidden" name="item_call_date[]" value="'+$("#call_date").val()+'"></td>'+
		    '<td>'+$("#call_konfirm").val()+'<input type="hidden" name="item_call_konfirm[]" value="'+$("#call_konfirm").val()+'"></td>'+
                    '<td>'+$("#call_cp_lain").val()+'<input type="hidden" name="item_call_cp_lain[]" value="'+$("#call_cp_lain").val()+'"></td>'+
                    '<td>'+$("#call_telp_lain").val()+'<input type="hidden" name="item_call_telp_lain[]" value="'+$("#call_telp_lain").val()+'"></td>'+
                    '<td>'+$("#call_status").val()+'<input type="hidden" name="item_call_status[]" value="'+$("#call_status").val()+'"></td>'+
                    '<td>'+$("#call_keterangan").val()+'<input type="hidden" name="item_call_keterangan[]" value="'+$("#call_keterangan").val()+'"></td>'+
		    '<td><a href="" onclick="edit_call(\''+id+
						    '\', \''+$("#call_nama_admin").val()+
						    '\', \''+$("#call_date").val()+
                                                    '\', \''+$("#call_konfirm").val()+
                                                    '\', \''+$("#call_cp_lain").val()+
                                                    '\', \''+$("#call_telp_lain").val()+
                                                    '\', \''+$("#call_status").val()+
                                                    '\', \''+$("#call_keterangan").val()+
						    '\'); return false">E</a> | <a href="" onclick="remove_call(\''+id+'\'); return false;">D</a></td>'+
		   '</tr>';
	if ( $("#mode").val() == 'insert')
	{
	    $('#item').append( $string );
	}
	else {
	    $('tr#call_'+$("#call_idx").val()).replaceWith($string);
	}
	id++;
	set_call ('');
    }

    function set_call( VAL )
    {
        $("#call_konfirm").val( VAL );
        $("#call_cp_lain").val( VAL );
        $("#call_telp_lain").val( VAL );
        $("#call_status").val( VAL );
	$("#call_keterangan").val( VAL );
	$("#mode").val( 'insert' );
    }

    function edit_call ( ID, ADM, DATE, KONFIRM, CPLAIN, TELPLAIN, STATUS, KETERANGAN )
    {
        $("#call_idx").val( ID );
	$("#call_nama_admin").val( ADM );
	$("#call_date").val( DATE );
	$("#call_konfirm").val( KONFIRM );
	$("#call_cp_lain").val( CPLAIN );
        $("#call_telp_lain").val( TELPLAIN );
        $("#call_status").val( STATUS );
	$("#call_keterangan").val( KETERANGAN );        
	$("#mode").val('edit');
	return false;
    }

    function remove_call ( VAL )
    {
	$('#call_'+VAL).remove();
	return false;
    }
    function dontEnter(evt) { 
    var evt = (evt) ? evt : ((event) ? event : null); 
      var node = (evt.target) ? evt.target : ((evt.srcElement) ? evt.srcElement : null); 
      if ((evt.keyCode == 13) && (node.type=="text"))  {return false;} 
    } 
    document.onkeypress = dontEnter;
</script>

<?php echo form_open(uri_string(),array('id'=>'formid', 'class'=>'form-horizontall'))?>
<?php echo view_errors();?>

<div class="modal hide" id="myModal">
    <div class="modal-header">
	<button type="button" class="close" data-dismiss="modal">X</button>
	<h4>Schedule for Customer :<?php echo '['.$cus->cus_corporate_id.'] '.$cus->cus_nama_perusahaan ?></h4>
    </div>    
    <div class="modal-body">
	<table>	    
	    <tr>
		<td><?php echo form_text('Schedule Date','sched_date',(isset($data[0]->sched_date))?$data[0]->sched_date:'','class="span3"  autocomplete="off" readonly');?></td>
		<td><?php echo form_text('Schedule time','sched_time',(isset($data[0]->sched_time))?$data[0]->sched_time:'','class="span3" autocomplete="off" readonly');?></td>
	    </tr>
	    <tr>
		<td><?php echo form_text('Visit','sched_visit',(isset($data[0]->sched_visit))?$data[0]->sched_visit:'','class="span2" readonly');?></td>
		<td><?php echo form_drop('Status','pkt_konfirm',$status,(isset($data[0]->pkt_konfirm))?$data[0]->pkt_konfirm:'','class="span2"');?></td>
	    </tr>
	    <tr>
		<td><?php echo form_text('Resolved Date','sched_resolve_date',(isset($data[0]->sched_resolve_date) && $data[0]->sched_resolve_date != '')?date('d-M-Y ;l',strtotime($data[0]->sched_resolve_date)):'','class="span2" id="resolve_date" autocomplete="off"');?></td>
		<td><?php echo form_drop('Engineer','sched_engineer',$engineer,(isset($data[0]->sched_engineer))?$data[0]->sched_engineer:'','class="span2"');?></td>
	    <tr>
		<td><?php echo form_area('Keterangan','sched_keterangan',(isset($data[0]->sched_keterangan))?$data[0]->sched_keterangan:'','class="span4" autocomplete="off"');?></td>
	    </tr>
	    <!--<tr>
		<td>
		    <div class="control-group">
		    <label class="control-label" for="it_has_ed">Agenda Kunjungan</label>
			<div class="controls">
			<input type="checkbox" name="agenda_kunjungan[]" value="Key BCA Delivery"<?php echo (isset($data[0]->sched_agenda_kunjungan) && in_array('Key BCA Delivery', explode(',', $data[0]->sched_agenda_kunjungan)))?' checked':'' ?>>  Key BCA Delivery<br>
			<input type="checkbox" name="agenda_kunjungan[]" value="VPN Setting & Instalation"<?php echo (isset($data[0]->sched_agenda_kunjungan) && in_array('VPN Setting & Instalation', explode(',', $data[0]->sched_agenda_kunjungan)))?' checked':'' ?>>  VPN Setting & Instalation<br>
			<input type="checkbox" name="agenda_kunjungan[]" value="Training Pemakaian"<?php echo (isset($data[0]->sched_agenda_kunjungan) && in_array('Training Pemakaian', explode(',', $data[0]->sched_agenda_kunjungan)))?' checked':'' ?>>  Training Pemakaian<br>
			<input type="checkbox" name="agenda_kunjungan[]" value="Training Sysadmin"<?php echo (isset($data[0]->sched_agenda_kunjungan) && in_array('Training Sysadmin', explode(',', $data[0]->sched_agenda_kunjungan)))?' checked':'' ?>>  Training Sysadmin<br>
			<input type="checkbox" name="agenda_kunjungan[]" value="Training MAR"<?php echo (isset($data[0]->sched_agenda_kunjungan) && in_array('Training MAR', explode(',', $data[0]->sched_agenda_kunjungan)))?' checked':'' ?>>  Training MAR<br>
			<input type="checkbox" name="agenda_kunjungan[]" value="Training MFTS Converter"<?php echo (isset($data[0]->sched_agenda_kunjungan) && in_array('Training MFTS Converter', explode(',', $data[0]->sched_agenda_kunjungan)))?' checked':'' ?>>  Training MFTS Converter<br>
			<input type="checkbox" name="agenda_kunjungan[]" value="KBB Trouble Shooting"<?php echo (isset($data[0]->sched_agenda_kunjungan) && in_array('KBB Trouble Shooting', explode(',', $data[0]->sched_agenda_kunjungan)))?' checked':'' ?>>  KBB Trouble Shooting
			</div>
		    </div>
		</td>
		<td>
		    <div class="control-group">
			<label class="control-label" for="it_has_ed">Fitur BCA</label>
			<div class="controls">
			    <input type="checkbox" name="sched_fitur[]" value="Training BCA VA"<?php echo (isset($data[0]->sched_fitur) && in_array('Training BCA VA', explode(',', $data[0]->sched_fitur)))?' checked':'' ?>>  Training BCA VA<br>
			    <input type="checkbox" name="sched_fitur[]" value="Training VA"<?php echo (isset($data[0]->sched_fitur) && in_array('Training VA', explode(',', $data[0]->sched_fitur)))?' checked':'' ?>>  Training VA<br>
			    <input type="checkbox" name="sched_fitur[]" value="Training Payroll"<?php echo (isset($data[0]->sched_fitur) && in_array('Training Payroll', explode(',', $data[0]->sched_fitur)))?' checked':'' ?>>  Training Payroll<br>
			    <input type="checkbox" name="sched_fitur[]" value="Training Auto Credit"<?php echo (isset($data[0]->sched_fitur) && in_array('Training Auto Credit', explode(',', $data[0]->sched_fitur)))?' checked':'' ?>>  Training Auto Credit<br>
			    <input type="checkbox" name="sched_fitur[]" value="Training Auto Colection"<?php echo (isset($data[0]->sched_fitur) && in_array('Training Auto Colection', explode(',', $data[0]->sched_fitur)))?' checked':'' ?>>  Training Auto Colection<br>
			    <input type="checkbox" name="sched_fitur[]" value="Training B2B Pertamina"<?php echo (isset($data[0]->sched_fitur) && in_array('Training B2B Pertamina', explode(',', $data[0]->sched_fitur)))?' checked':'' ?>>  Training B2B Pertamina<br>
			    <input type="checkbox" name="sched_fitur[]" value="Training Fleet"<?php echo (isset($data[0]->sched_fitur) && in_array('Training Fleet', explode(',', $data[0]->sched_fitur)))?' checked':'' ?>>  Training Fleet<br>
			    <input type="checkbox" name="sched_fitur[]" value="Training KBB"<?php echo (isset($data[0]->sched_fitur) && in_array('Training KBB', explode(',', $data[0]->sched_fitur)))?' checked':'' ?>>  Training KBB
			</div>
		    </div>
		</td>			
	    </tr>-->
	</table>
    </div>
    
    <div class="modal-footer">
	<?php echo form_submit('save','Save data', 'class="btn btn-primary"')?>
		<?php echo anchor($this->module[0] . '/schedule_list/'.$data[0]->cus_idx.'/'.$data[0]->pkt_idx,'Back to List Paket', 'class="btn"')?>
    </div>
</div>

<?php echo form_close();?>
