<script src="<?php echo base_url()?>static/js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#formid").validate();
        $("#pkt_tanggal_koneksi").datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: 'dd-M-yy',
		showAnim: 'fold'
	});
        $("#pkt_tanggal_terima").datepicker
	({
		changeMonth: true,
		changeYear: true,
		dateFormat: 'dd-M-yy',
		showAnim: 'fold',
                minDate: '-2m',
                maxDate:'+2m',
		onClose: function(dateText, inst)
		{
		    if ($("#pkt_tanggal_koneksi").val() == '') {
			alert('Tanggal terima paket harus di isi');
			$("#pkt_tanggal_terima").val('');
			$("#pkt_tanggal_koneksi").focus();
			return false;
		    }
		    else if (Date.parse(dateText) < Date.parse($("#pkt_tanggal_koneksi").val()))
		    {
			alert('Tanggal terima paket tidak boleh sebelum tanggal koneksi');
			$("#pkt_tanggal_terima").val('');
			$("#pkt_tanggal_terima").focus();
			return false;
		    }
		    var dateText = Date.parse(dateText);
		    
		    // Jika sabtu / minggu maka
		    if (dateText.is().monday() || dateText.is().tuesday()) {
			var due_date =  dateText.add(3).days();
		    } else if (dateText.is().wednesday()) {
			var due_date =  dateText.next().monday();
		    } else if (dateText.is().thursday()) {
			var due_date =  dateText.next().tuesday();
		    } else if (dateText.is().friday()) {
			var due_date =  dateText.next().wednesday();
		    } 
		    $('#pkt_jatuh_tempo').val(due_date.toString('dd-MMM-yyyy'));
		}
	});
        $('#pkt_corporate_id').autocomplete('<?php echo base_url()?>customer/paket/customer_ajax',{
		parse: function(data){
		    var parsed = [];
		    for (var i=0; i < data.length; i++) {
			parsed[i] = { data: data[i], value: data[i].cus_corporate_id };
		    }
		    return parsed;
		},
		formatItem: function(data,i,max){
		    return  '<div class="search_content"><bold> '+data.cus_corporate_id+' </bold> &nbsp;<small>'+data.cus_nama_perusahaan+'</small></div>';
		},
		width: 450, 
		dataType: 'json' 
	    }).result( 
		    function(event,data,formated){
			$('#pkt_corporate_id').val(data.cus_corporate_id);
                        $('#cus_nama_perusahaan').val(data.cus_nama_perusahaan);
                        $('#cus_cp').val(data.cus_cp);
	    		$('#cus_idx').val(data.cus_idx);
    	    });
	
        update_amount();
    });
    
    var id = 0;
    function insert_key ()
    {
	if ($("#key_sn").val() == '') {alert ('Please fill SN'); $("#key_sn").focus();return false;}
	else if ($("#key_username").val() == '') {alert ('Please fill username'); $("#key_username").focus();return false;}

	var is_double = false;
	$("#item tr").each(function() {
	    if ($(this).find('td:first input').val() == $("#key_sn").val()) {
		is_double = true;
	    }
	});

	if(is_double) {
	    alert("Key SN may not duplicate");
	    $("#key_sn").val('');
	    $("#key_sn").focus();
	} else {
	    insert_key_print ();
	}
	
    }

    function insert_key_print ()
    {
	$string = '<tr id="key_'+id+'">'+
		    '<td>'+$("#key_sn").val()+'<input type="hidden" name="item_key_sn[]" value="'+$("#key_sn").val()+'">'+
		    '<td>'+$("#key_username").val()+'<input type="hidden" name="item_key_username[]" value="'+$("#key_username").val()+'"></td>'+
		    '<td><a href="" onclick="edit_key(\''+id+
						    '\', \''+$("#key_sn").val()+
						    '\', \''+$("#key_username").val()+
						    '\'); return false">Edit</a> | <a href="" onclick="remove_key(\''+id+'\'); return false;">Delete</a></td>'+
		   '</tr>';
	if ( $("#mode").val() == 'insert')
	{
            
	    $('#item').append( $string );
	}
	else
        {
	    $('tr#key_'+$("#id_key").val()).replaceWith($string);
	}
	id++;
	set_key ('');
	update_amount();
    }

    function set_key ( VAL )
    {
	$("#key_sn").val( VAL );
	$("#key_username").val( VAL );
	$("#mode").val( 'insert' );
    }

    function edit_key ( ID, SN, USERNAME)
    {
        $("#id_key").val( ID );
	$("#key_sn").val( SN );
	$("#key_username").val( USERNAME );
	$("#mode").val('edit');
	return false;
    }

    function remove_key ( VAL )
    {
	$('#key_'+VAL).remove();
        update_amount();
	return false;
    }

    function update_amount()
    {
        var rows = $("#key_list >tbody tr").length;
        $("#pkt_jumlah_key").val(rows);
    }
</script>
<div class="page-header">
    <h2>Detail Customer : <?php echo '['.$cus->cus_corporate_id.'] '.$cus->cus_nama_perusahaan ?></h2>
</div>
<div class="tabbable" style="margin-bottom: 9px;">
    <ul class="nav nav-tabs">
	<li<?php echo ($action == 'detail')?' class="active"':'' ?>><?php echo anchor($module[0].'/update/detail/'.$cus->cus_idx,'Customer')?></li>
	<li<?php echo ($action == 'paket')?' class="active"':'' ?>><?php echo anchor($module[0].'/update/paket/'.$cus->cus_idx,'Paket & Key')?></li>
    </ul>
    <div class="tab-content">
	<?php echo form_open(uri_string(),array('id'=>'formid', 'class'=>'form-horizontal'))?>
	<?php echo view_errors();?>
	<table>
	<tr>
	    <td><?php echo form_hidden('cus_idx',$cus->cus_idx, 'id=cus_idx');?>    
		<?php echo form_drop('Jenis Paket *','pkt_tipe',array('gold'=>'Gold','gold_payroll'=>'Gold Payroll','platinum'=>'Platinum'),(isset($data[0]->pkt_tipe))?$data[0]->pkt_tipe:'','class="span2"');?>
	    </td>
	    <td><?php echo form_drop('Tipe Paket *','pkt_jenis',array('single_otorisasi'=>'Single Otorisasi','multi_otorisasi'=>'Multi Otorisasi'),(isset($data[0]->pkt_jenis))?$data[0]->pkt_jenis:'','class="span2"');?></td>
	</tr>
	<tr>
	    <td><?php echo form_drop('Model Paket *','pkt_status',array('new'=>'New','upgrade'=>'Upgrade','amplop'=>'Amplop','info_bca'=>'Info BCA'),(isset($data[0]->pkt_status))?$data[0]->pkt_status:'','class="span2"');?></td>
	    <td><?php echo form_text('Tgl Koneksi*','pkt_tanggal_koneksi',(isset($data[0]->pkt_tanggal_koneksi))?date('d-M-Y',strtotime($data[0]->pkt_tanggal_koneksi)):'','class="span2" maxlength="15" id="pkt_tanggal_koneksi"');?></td>
	</tr>
	<tr>
	    <td><?php echo form_text('Tgl Terima Paket*','pkt_tanggal_terima',(isset($data[0]->pkt_tanggal_terima))?date('d-M-Y',strtotime($data[0]->pkt_tanggal_terima)):'','class="span2" maxlength="15" id="pkt_tanggal_terima" autocomplete="off"');?></td>
	    <td><?php echo form_text('Tgl Due Date*','pkt_jatuh_tempo',(isset($data[0]->pkt_jatuh_tempo))?date('d-M-Y',strtotime($data[0]->pkt_jatuh_tempo)):'','class="span2" maxlength="15" autocomplete="off" readonly');?></td>
	</tr>
	</table>
	    <legend>List Key</legend>
	    <div class="well form-inline">
	    <input autocomplete="off" type="text" name="key_sn" placeholder="Key SN" id="key_sn" class="span2" maxlength="10" onkeyup="this.value=this.value.replace(/\D/g,'') ">
	    <input autocomplete="off" type="text" name="key_username" placeholder="Username" id="key_username" class="span3">
	    <input type="hidden" value="insert" name="mode" id="mode" >
	    <input type="hidden" value="" name="id_key" id="id_key">
	    <?php echo form_button('insert-key','Insert','onclick="return insert_key()" class="btn"')?>
	    </div>
	    <table class="table table-bordered" id="key_list">
	      <thead>
		<tr>
			<th>Key</th>
			<th>User Name</th>
			<th width="10%">&nbsp;</th>
		</tr>
	      </thead>
	      <tbody id="item">
	      <?php
	      if (@$key) { 
	      for($i=0; $i<count($key); $i++)
	      {
		echo '<tr id="key_'.$i.'">';
		echo '<td>'. $key[$i]->key_id .'<input type="hidden" name="item_key_sn[]" value="'. $key[$i]->key_id .'"></td>';
		echo '<td>'. $key[$i]->key_nama_user .'<input type="hidden" name="item_key_username[]" value="'. $key[$i]->key_nama_user .'"></td>';
		echo '<td><a href="" onclick="edit_key(\''.$i.
					'\', \''.$key[$i]->key_id.
					'\', \''.$key[$i]->key_nama_user.
					'\'); return false">Edit</a> | <a href="" onclick="remove_key(\''.$i.'\'); return false;">Delete</a></td>';
		echo "</tr>";
	      } }
	      ?>
	      </tbody>
	      <tfoot>
		<tr>
			<th colspan="2" align="right">Total Key</th>
			<th><input type="text" name="pkt_jumlah_key" id="pkt_jumlah_key" readonly="readonly" style="width:100%"></th>
		</tr>
	      </tfoot>
	    </table>

	    <p><code>Note: </code> &nbsp; All field mark with <code>*</code> are required.</p>
	    <div class="form-actions">
		
		<?php echo form_submit('save','Save data', 'class="btn btn-primary"')?>
		<?php echo anchor($this->module[0] . '/update/paket/' . $cus->cus_idx,'Back to List Paket', 'class="btn"')?>
	    </div>
	<?php echo form_close();?>
    </div>
</div>