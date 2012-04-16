<script src="<?php echo base_url()?>static/js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#formid").validate();
         $("#pkt_tanggal_koneksi").datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: 'yy-mm-dd',
		showAnim: 'fold'
	});
        $("#pkt_tanggal_terima").datepicker({
		changeMonth: true,
		changeYear: true,
		dateFormat: 'yy-mm-dd',
		showAnim: 'fold'
	});
        $('#pkt_corporate_id').autocomplete('<?php echo base_url()?>schedule/schedule/customer_ajax',{
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
	    		$('#cus_idx').val(data.cus_idx);
    	    });
	
        update_amount();
	
	$("#pkt_jatuh_tempo").focus(function(){
            var due_date = new Date($("#pkt_tanggal_terima").val());
                if(Date.parse(due_date)) {
                var due_date = new Date().setDate(due_date.getDate()+2);
                var due_date = new Date(due_date);
                var due_date = due_date.toLocaleFormat('%Y-%m-%d');
                $("#pkt_jatuh_tempo").val(due_date);
            }
        });
    });
    
    var id = 0;
    function insert_key ()
    {
	if ($("#key_sn").val() == '') {alert ('Please fill SN'); $("#key_sn").focus()}
	else if ($("#key_username").val() == '') {alert ('Please fill username'); $("#key_username").focus()}
	else insert_key_print ();
    }

    function insert_key_print ()
    {
	$string = '<tr id="key_'+id+'">'+
		    '<td>'+$("#key_sn").val()+'<input type="hidden" name="item_key_sn[]" value="'+$("#key_sn").val()+'">'+
		    '<td>'+$("#key_username").val()+'<input type="hidden" name="item_key_username[]" value="'+$("#key_username").val()+'"></td>'+
		    '<td><a href="" onclick="edit_key(\''+id+
						    '\', \''+$("#key_sn").val()+
						    '\', \''+$("#key_username").val()+
						    '\'); return false">E</a> | <a href="" onclick="remove_key(\''+id+'\'); return false;">D</a></td>'+
		   '</tr>';
	if ( $("#mode").val() == 'insert')
	{
	    $('#item').append( $string );
	}
	else {
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
        $("#tot_key").val(rows);
    }
</script>
<div class="page-header">
    <h2>Detail Paket</h2>
</div>
<?php echo form_open(uri_string(),array('id'=>'formid', 'class'=>'form-horizontal'))?>
<?php echo view_errors();?>
    <?php echo form_hidden('cus_idx',(isset($data[0]->cus_idx))?$data[0]->cus_idx:'', 'id=cus_idx');?>    
    <?php echo form_text('Corporate ID *','cus_corporate_id',(isset($data[0]->cus_corporate_id[0]))?$data[0]->cus_corporate_id:'','class="span2" maxlength="10" id="pkt_corporate_id"');?>
    <?php echo form_text('Name Perusahaan*','cus_nama_perusahaan',(isset($data[0]->cus_nama_perusahaan))?$data[0]->cus_nama_perusahaan:'','class="span3" maxlength="64"');?>
    <?php echo form_area('Contact Person *','cus_cp',(isset($data[0]->cus_cp))?$data[0]->cus_cp:'','class="span3" maxlength="64"');?>
    <?php echo form_drop('Jenis Paket *','pkt_jenis',array('single_otorisasi'=>'Single Otorisasi','multi_otorisasi'=>'Multi Otorisasi'),(isset($data[0]->pkt_jenis))?$data[0]->pkt_jenis:'','class="span2"');?>
    <?php echo form_drop('Tipe Paket *','pkt_tipe',array('gold'=>'Gold','gold_payroll'=>'Gold Payroll','platinum'=>'Platinum'),(isset($data[0]->pkt_tipe))?$data[0]->pkt_tipe:'','class="span2"');?>
    <?php echo form_drop('Fitur Paket *','pkt_fitur',array(
                                                           'va'=>'Virtual Account',
                                                           'bca_va'=>'BCA Virtual Account',
                                                           'payroll'=>'Payroll',
                                                           'b2b_pertamina'=>'B2B Pertamina',
                                                           'b2b_ecommerce'=>'B2B E-Commerce',
                                                           'mar'=>'MAR',
                                                           'sysadmin'=>'Sysadmin',
                                                           ),(isset($data[0]->pkt_fitur))?$data[0]->pkt_fitur:'','class="span2"');?>
    <?php echo form_text('Tgl Koneksi*','pkt_tanggal_koneksi',(isset($data[0]->pkt_tanggal_koneksi))?$data[0]->pkt_tanggal_koneksi:'','class="span2" maxlength="15" id="pkt_tanggal_koneksi"');?>    
    <?php echo form_text('Tgl Terima Paket*','pkt_tanggal_terima',(isset($data[0]->pkt_tanggal_terima))?$data[0]->pkt_tanggal_terima:'','class="span2" maxlength="15" id="pkt_tanggal_terima"');?>    
    <?php echo form_text('Tgl Due Date*','pkt_jatuh_tempo',(isset($data[0]->pkt_jatuh_tempo))?$data[0]->pkt_jatuh_tempo:'','class="span2" maxlength="15" id="pkt_jatuh_tempo"');?>    

    <legend>List Key</legend>
    <div class="well form-inline">
    <input type="text" name="key_sn" placeholder="Key SN" id="key_sn" class="span3" maxlength="10">
    <input type="text" name="key_username" placeholder="Username" id="key_username" class="span2">
    <input type="hidden" value="insert" name="mode" id="mode">
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
      if ($key) { 
      for($i=0; $i<count($key); $i++)
      {
	echo '<tr id="key_'.$i.'">';
	echo '<td>'. $key[$i]->key_id .'<input type="hidden" name="item_key_sn[]" value="'. $key[$i]->key_id .'"></td>';
	echo '<td>'. $key[$i]->key_nama_user .'<input type="hidden" name="item_key_username[]" value="'. $key[$i]->key_nama_user .'"></td>';
	echo '<td><a href="" onclick="edit_key(\''.$i.
				'\', \''.$key[$i]->key_id.
				'\', \''.$key[$i]->key_nama_user.
				'\'); return false">E</a> | <a href="" onclick="remove_key(\''.$i.'\'); return false;">D</a></td>';
	echo "</tr>";
      } }
      ?>
      </tbody>
      <tfoot>
	<tr>
		<th colspan="2" align="right">Total Key</th>
                <th><input type="text" name="tot_key" id="tot_key" readonly="readonly" style="width:100%"></th>
	</tr>
      </tfoot>
    </table>

    <p><code>Note: </code> &nbsp; All field mark with <code>*</code> are required.</p>
    <div class="form-actions">
        <?php echo form_submit('save','Save data', 'class="btn btn-primary"')?>
        <?php echo anchor($module[0],'Cancel', 'class="btn"')?>
        <?php if(isset($data[0]->pkt_idx)): ?><div class="pull-right"><?php echo anchor($module[0].'/delete/'.$data[0]->pkt_idx,'Delete Paket', 'class="btn btn-danger"')?></div><?php endif; ?>
    </div>
<?php echo form_close();?>