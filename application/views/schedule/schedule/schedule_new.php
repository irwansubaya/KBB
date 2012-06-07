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
		    dateFormat: 'dd-M-yy DD',
		    showAnim: 'fold'
	});
        $('#date_time').datetimepicker({
            dateFormat: 'dd-M-yy DD',
            minDate: '-2m',
            maxDate:'+2m',
            });
         $(('#tabs-2')).hide();
         //$(('#btnsave')).hide();
    });
    $(function() {
	$( "#tabs" ).tabs();
    });
        
    var id = 0;
    function insert_call ()
    {
        if ($("#call_konfirm").val() == '') {alert ('Please fill respon'); $("#call_konfirm").focus()}
        //else if ($("#call_status").val() == '') {alert ('Please fill Status'); $("#call_status").focus()}
	else insert_call_print();
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
		    '<td><a href="" onclick="edit_call(\''+id+
						    '\', \''+$("#call_nama_admin").val()+
						    '\', \''+$("#call_date").val()+
                                                    '\', \''+$("#call_konfirm").val()+
                                                    '\', \''+$("#call_cp_lain").val()+
                                                    '\', \''+$("#call_telp_lain").val()+
                                                    '\', \''+$("#call_status").val()+
                                                    '\', \''+$("#call_keterangan").val()+
						    '\'); return false">Edit</a> | <a href="" onclick="remove_call(\''+id+'\'); return false;">Delete</a></td>'+
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
						<?php echo form_text('Schedule Date','sched_date',(isset($data[0]->sched_date))?date('d-M-Y ;D',strtotime($data[0]->sched_date)):'','class="span4" id="sched_date" autocomplete="off"');?>
						<?php echo form_text('Schedule time','sched_time',(isset($data[0]->sched_time))?date('',strtotime($data[0]->sched_time)):'','class="span3" id="timepicker" autocomplete="off"');?>
						<?php echo form_drop('Visit','sched_visit',$visit,(isset($data[0]->sched_visit))?$data[0]->sched_visit:'','class="span2"');?></td>
						<td valign="top"><?php echo form_area('Alamat Kirim ','sched_alamat_kirim',(isset($data[0]->sched_alamat_kirim))?$data[0]->sched_alamat_kirim:'','class="span4" autocomplete="off"');?></td>
					    </tr>
					    <tr>
						<td>
						    <div class="control-group">
							<label class="control-label" for="it_has_ed">Agenda Kunjungan</label>
							<div class="controls">
							    <input type="checkbox" name="agenda_kunjungan[]" value="Key BCA Delivery">  Key BCA Delivery<br>
							    <input type="checkbox" name="agenda_kunjungan[]" value="VPN Setting & Instalation">  VPN Setting & Instalation<br>
							    <input type="checkbox" name="agenda_kunjungan[]" value="Training Pemakaian">  Training Pemakaian<br>
							    <input type="checkbox" name="agenda_kunjungan[]" value="Training Sysadmin">  Training Sysadmin<br>
							    <input type="checkbox" name="agenda_kunjungan[]" value="Training MAR">  Training MAR<br>
							    <input type="checkbox" name="agenda_kunjungan[]" value="Training MFTS Converter">  Training MFTS Converter<br>
							    <input type="checkbox" name="agenda_kunjungan[]" value="KBB Trouble Shooting">  KBB Trouble Shooting
							</div>
						    </div>
						</td>
						<td>
						    <div class="control-group">
							<label class="control-label" for="it_has_ed">Fitur BCA</label>
							<div class="controls">
							    <input type="checkbox" name="sched_fitur[]" value="Training BCA VA">  Training BCA VA<br>
							    <input type="checkbox" name="sched_fitur[]" value="Training VA">  Training VA<br>
							    <input type="checkbox" name="sched_fitur[]" value="Training Payroll">  Training Payroll<br>
							    <input type="checkbox" name="sched_fitur[]" value="Training Auto Credit">  Training Auto Credit<br>
							    <input type="checkbox" name="sched_fitur[]" value="Training Auto Colection">  Training Auto Colection<br>
							    <input type="checkbox" name="sched_fitur[]" value="Training B2B Pertamina">  Training B2B Pertamina<br>
							    <input type="checkbox" name="sched_fitur[]" value="Training Fleet">  Training Fleet<br>
							    <input type="checkbox" name="sched_fitur[]" value="Training KBB">  Training KBB
							</div>
						    </div>
						</td>
						
					    </tr>
					    <tr>
						<td><input type="hidden" name="sched_status" id="sched_status"></td>
					    </tr>
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
                     <td>&nbsp;</td>
                     <td>
                         <input type="hidden" value="" name="call_idx" id="call_idx">
                         <?php echo form_button('insert-call','Insert','onclick="return insert_call()" class="btn"')?>
                     </td>
                 </tr>
                 <tr>
                     <td><input type="hidden" value="insert" name="mode" id="mode"></td>
                     <td><input type="hidden" value="" name="id_call" id="id_call"></td>
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
                              <th width="10%">&nbsp;</th>
                      </tr>
                    </thead>
                    <tbody id="item">
                    </tbody>
                  </table>
        </div>
        
	<!--<div id="tabs-3">
		<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
		<p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
	</div>-->
</div>

    <div class="form-actions">
        <?php echo form_submit('save','Save data', 'class="btn btn-primary"')?>
        <?php echo anchor($this->module[0] . '/schedule_list/'.$data[0]->cus_idx.'/'.$data[0]->pkt_idx,'Back to List Paket', 'class="btn"')?>
    </div>
<?php echo form_close();?>
