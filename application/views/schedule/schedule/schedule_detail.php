<script src="<?php echo base_url()?>static/js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#formid").validate();
	$('#timepicker').timepicker({
            dateformat    : 'Hi',
            onchange      : function( time ){
                $('p.output').text( 'Time: ' + time + ' hrs' );
            }
        });
	$("#sched_date").datepicker({
		    changeMonth: true,
		    changeYear: true,
		    dateFormat: 'dd-M-yy',
		    minDate: '-2m',
                maxDate:'+2m',
		    showAnim: 'fold'
	});
        $('#date_time').datetimepicker({
            });
	$(('#tabs-2')).hide();
    });
    
    $(function() {
	$( "#tabs" ).tabs();
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
            $("#sched_status").val('Active') && $("#pkt_konfirm").val('Active') && $(('#tabs-2')).show();
	}
        else
        $("#sched_status").val('Folow Up') && $("#pkt_konfirm").val('Folow Up') && $('#tabs-2').hide();              
        
	$string = '<tr id="call_'+id+'">'+
		    '<td>'+$("#call_nama_admin").val()+'<input type="hidden" name="item_call_nama_admin[]" value="'+$("#call_nama_admin").val()+'"></td>'+
		    '<td>'+$("#call_date").val()+'<input type="hidden" name="item_call_date[]" value="'+$("#call_date").val()+'"></td>'+
		    '<td>'+$("#call_konfirm").val()+'<input type="hidden" name="item_call_konfirm[]" value="'+$("#call_konfirm").val()+'"></td>'+
                    '<td>'+$("#call_cp_lain").val()+'<input type="hidden" name="item_call_cp_lain[]" value="'+$("#call_cp_lain").val()+'"></td>'+
                    '<td>'+$("#call_telp_lain").val()+'<input type="hidden" name="item_call_telp_lain[]" value="'+$("#call_telp_lain").val()+'"></td>'+
                    '<td>'+$("#call_status").val()+'<input type="hidden" name="item_call_status[]" value="'+$("#call_status").val()+'"></td>'+
                    '<td>'+$("#call_keterangan").val()+'<input type="hidden" name="item_call_keterangan[]" value="'+$("#call_keterangan").val()+'"></td>'+
		    /*'<td><a href="" onclick="edit_call(\''+id+
						    '\', \''+$("#call_nama_admin").val()+
						    '\', \''+$("#call_date").val()+
                                                    '\', \''+$("#call_konfirm").val()+
                                                    '\', \''+$("#call_cp_lain").val()+
                                                    '\', \''+$("#call_telp_lain").val()+
                                                    '\', \''+$("#call_status").val()+
                                                    '\', \''+$("#call_keterangan").val()+
						    '\'); return false">Edit</a> | <a href="" onclick="remove_call(\''+id+'\'); return false;">Delete</a></td>'+*/
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
	//$("#mode").val('edit');
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
<div class="page-header">
    <h2>Schedule for Customer :<?php echo '['.$cus->cus_corporate_id.'] '.$cus->cus_nama_perusahaan.'['.$cus->cus_handphone.'/'.$cus->cus_telepon_kantor.']' ?></h2>
</div>

<?php echo form_open(uri_string(),array('id'=>'formid', 'class'=>'form-horizontal'))?>
<?php echo view_errors();?>

<div id="tabs">
	<!--<ul>
		<li><a href="#tabs-1" id="test">Status Call</a></li>
		<li><a href="#tabs-2" id="hiden_tabs">Schedule</a></li>
		<li><a href="#tabs-3">Aenean lacinia</a></li>
	</ul>-->
	
	<div id="tabs-1">
	<table>
                <tr>
                    <td><?php echo form_hidden('cus_idx',$cus->cus_idx, 'id=cus_idx');?></td>
                    <td><?php echo form_hidden('pkt_idx',$data[0]->pkt_idx, 'id=pkt_idx');?></td>
                </tr>
                <tr>
                    <td><?php echo form_hidden('sched_idx','', 'id=sched_idx');?></td>
                </tr>
                <tr>
                    <td><?php echo form_area('Contact Person','cus_cp',(isset($data[0]->cus_cp))?$data[0]->cus_cp:'','class="span4" maxlength="64" readonly');?></td>
                    <td><?php echo form_area('ALamat','cus_alamat',(isset($data[0]->cus_alamat))?$data[0]->cus_alamat:'','class="span4" maxlength="255" readonly');?></td>
                </tr>
                <tr>
                    <td><?php echo form_text('Tipe Paket','pkt_tipe',(isset($data[0]->pkt_tipe))?$data[0]->pkt_tipe:'','class="span2" id="pkt_tipe" readonly');?></td>
                    <td><?php echo form_text('Kota','cus_kota',(isset($data[0]->cus_kota))?$data[0]->cus_kota:'','class="span3" readonly');?></td>
                </tr>
                <tr>
                    <td><?php echo form_text('Jenis Paket','pkt_jenis',(isset($data[0]->pkt_jenis))?$data[0]->pkt_jenis:'','class="span3" readonly');?></td>
                    <td><?php echo form_text('Telp Kantor ','cus_telepon_kantor',(isset($data[0]->cus_telepon_kantor))?$data[0]->cus_telepon_kantor:'','class="span4" maxlength="32" readonly');?></td>
                </tr>
                <tr>
                    <td><?php echo form_text('Model Paket','pkt_status',(isset($data[0]->pkt_status))?$data[0]->pkt_status:'','class="span2"  readonly');?></td>
                    <td><?php echo form_text('Tgl Terima Paket','pkt_tanggal_terima',(isset($data[0]->pkt_tanggal_terima))?date('d-M-Y ; l',strtotime($data[0]->pkt_tanggal_terima)):'','class="span4" id="pkt_tanggal_terima" readonly');?></td>
                </tr>
                <tr>
                    <td><?php echo form_text('Tgl Koneksi','pkt_tanggal_koneksi',(isset($data[0]->pkt_tanggal_koneksi))?date('d-M-Y ;l',strtotime($data[0]->pkt_tanggal_koneksi)):'','class="span4"  readonly');?></td>
                    <td><?php echo form_text('Tgl Due Date','pkt_jatuh_tempo',(isset($data[0]->pkt_jatuh_tempo))?date('d-M-Y ;l',strtotime($data[0]->pkt_jatuh_tempo)):'','class="span4"  readonly');?></td> 
                </tr>
                <tr>
                    <td><?php echo form_text('Status ','pkt_konfirm',(isset($data[0]->pkt_konfirm))?$data[0]->pkt_konfirm:'','class="span2" readonly');?></td>
                </tr>
            </table>	
			    <div id="tabs-2">
				<legend>Schedule</legend>
			       <div class="well form-inline">
				    <table>
					    <tr>
						<td>
						<?php echo form_text('Schedule Date','sched_date',(isset($data[0]->sched_date)&& $data[0]->sched_date!='0000-00-00')?date('d-M-Y D',strtotime($data[0]->sched_date)):'','class="span4" id="sched_date" autocomplete="off"');?>
						<?php echo form_text('Schedule time','sched_time',(isset($data[0]->sched_time))?date('H:i',strtotime($data[0]->sched_time)):'','class="span3" autocomplete="off"');?>
						<?php echo form_drop('Visit','sched_visit',$visit,(isset($data[0]->sched_visit))?$data[0]->sched_visit:'','class="span2"');?></td>
						<td valign="top"><?php echo form_area('Alamat Kirim ','sched_alamat_kirim',(isset($data[0]->sched_alamat_kirim))?$data[0]->sched_alamat_kirim:'','class="span4" autocomplete="off"');?></td>
					    </tr>
					    <tr>
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
							    <input type="checkbox" name="agenda_kunjungan[]" value="KBB Trouble Shooting"<?php echo (isset($data[0]->sched_agenda_kunjungan) && in_array('Training MFTS Converter', explode(',', $data[0]->sched_agenda_kunjungan)))?' checked':'' ?>>  KBB Trouble Shooting<br>
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
							    <input type="checkbox" name="sched_fitur[]" value="Training KBB"<?php echo (isset($data[0]->sched_fitur) && in_array('Training KBB', explode(',', $data[0]->sched_fitur)))?' checked':'' ?>>  Training KBB<br>							    
							</div>
						    </div>
						</td>
						
					    </tr>
					    <!--<tr>
						<td><input type="hidden" name="sched_status" id="sched_status"></td>
					    </tr>-->
					</table>
			    </div>
			    </div>	
	<legend>Call Admin</legend>
                <div class="well form-inline">
                 <table>
                 <tr>
                     <td>Nama Admin </td>
                     <td><input type="text" name="call_nama_admin" placeholder="Nama Admin" id="call_nama_admin" class="span4" value="Irwan" readonly="readonly"></td>
                     <td>&nbsp;</td>
                     <td>Call Date</td>
                     <td><input type="text" name="call_date" placeholder="Date" id="call_date" class="span4" readonly="readonly" value="<?php echo date('d-M-y H:i l')?>"></td>
                     <td>&nbsp;</td>
                      <td>Respon</td>
                     <td>
                         <select name="call_konfirm" id="call_konfirm" class="span3">
                             <?php
                             foreach ($konfirm as $val) {
                                 echo '<option value="'.$val[0].'">'.$val[0].'</option>';
                             }
                             ?>
                         </select>
                     </td>
                 </tr>
                 <tr>
                     <td>&nbsp;</td>
                 </tr>
                 <tr>
                     <td>CP Lain</td>
                     <td><input type="text" name="call_cp_lain" id="call_cp_lain" class="span4" autocomplete="off"></td>
                     <td>&nbsp;</td>
                     <td>Telp Lain</td>
                     <td><input type="text" name="call_telp_lain" id="call_telp_lain" class="span4" autocomplete="off"></td>
                     <td><input type="hidden" name="call_status" id="call_status"></td>
                     <td>Keterangan</td>
                     <td><textarea name="keterangan" id="call_keterangan" class="span4" autocomplete="off"></textarea></td>
                 </tr>	                 
                 <tr>
                     <td><input type="hidden" value="insert" name="mode" id="mode"></td>
                     <td><input type="hidden" value="" name="id_call" id="id_call"></td>
                 </tr>
                 </table>
		 <table>
		    <tr>                 
			<td><?php echo form_text('Status Schedule','sched_status',(isset($data[0]->sched_status))?$data[0]->sched_status:'','class="span3" readonly id="sched_status"');?></td>
		    </tr>
		    <tr>
                     <td>
                         <input type="hidden" value="" name="call_idx" id="call_idx">
                         <?php echo form_button('insert-call','Insert','onclick="return insert_call()" class="btn"')?>
                     </td>
                 </tr>
		 </table>
                </div>
	   
	   <table class="table table-bordered" id="call_list">
	      <thead>
		<tr>
			<th width="10%">Admin</th>
			<th width="10%">Call Date</th>
			<th width="10%">Respon</th>
			<th width="10%">CP Lain</th>
			<th width="10%">Telp Lain</th>
			<th width="10%">Call Status</th>
			<th width="20%">Keterangan</th>
			<!--<th width="10%">&nbsp;</th>-->
		</tr>
	      </thead>
	      <tbody id="item">
	      <?php
		      if (@$call) { 
		      for($i=0; $i<count($call); $i++)
		      {
			echo '<tr id="call_'.$i.'">';
			echo '<td>'. $call[$i]->call_nama_admin .'<input type="hidden" name="item_call_nama_admin[]" value="'. $call[$i]->call_nama_admin .'"></td>';
			echo '<td>'. $call[$i]->call_date .'<input type="hidden" name="item_call_date[]" value="'. $call[$i]->call_date .'"></td>';
			echo '<td>'. $call[$i]->call_konfirm .'<input type="hidden" name="item_call_konfirm[]" value="'. $call[$i]->call_konfirm .'"></td>';
			echo '<td>'. $call[$i]->call_cp_lain .'<input type="hidden" name="item_call_cp_lain[]" value="'. $call[$i]->call_cp_lain .'"></td>';
			echo '<td>'. $call[$i]->call_telp_lain .'<input type="hidden" name="item_call_telp_lain[]" value="'. $call[$i]->call_telp_lain .'"></td>';
			echo '<td>'. $call[$i]->call_status .'<input type="hidden" name="item_call_status[]" value="'. $call[$i]->call_status .'"></td>';
			echo '<td>'. $call[$i]->call_keterangan .'<input type="hidden" name="item_call_keterangan[]" value="'. $call[$i]->call_keterangan .'"></td>';
			/*echo '<td><a href="" onclick="edit_call(\''.$i.
						'\', \''.$call[$i]->call_nama_admin.
						'\', \''.$call[$i]->call_date.
						'\', \''.$call[$i]->call_konfirm.
						'\', \''.$call[$i]->call_cp_lain.
						'\', \''.$call[$i]->call_telp_lain.
						'\', \''.$call[$i]->call_status.
						'\', \''.$call[$i]->call_keterangan.
						'\'); return false">Edit</a> | <a href="" onclick="remove_call(\''.$i.'\'); return false;">Delete</a></td>';*/
			echo "</tr>";
		      } }
		      ?>
	      </tbody>
	    </table>
	    
	</div>
	
		
</div>

	    <div class="form-actions">
		<?php echo form_submit('save','Save data', 'class="btn btn-primary"')?>
		<?php echo anchor($this->module[0] . '/schedule_list/'.$data[0]->cus_idx.'/'.$data[0]->pkt_idx,'Back to List Paket', 'class="btn"')?>	    </div>
<?php echo form_close();?>
