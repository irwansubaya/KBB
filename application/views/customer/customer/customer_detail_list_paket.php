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
    <h2>Detail Customer : <?php echo '['.$cus->cus_corporate_id.'] '.$cus->cus_nama_perusahaan ?></h2>
</div>
<div class="tabbable" style="margin-bottom: 9px;">
    <ul class="nav nav-tabs">
	<li<?php echo ($action == 'detail')?' class="active"':'' ?>><?php echo anchor($module[0].'/update/detail/'.$cus->cus_idx,'Customer')?></li>
	<li<?php echo ($action == 'paket')?' class="active"':'' ?>><?php echo anchor($module[0].'/update/paket/'.$cus->cus_idx,'Paket & Key')?></li>
	<li<?php echo ($action == 'list_paket')?' class="active"':'' ?>><?php echo anchor($module[0].'/update/list_paket/'.$cus->cus_idx,'List paket')?></li>
        <!--<li<?php echo ($action == 'schedule')?' class="active"':'' ?>><?php echo anchor($module[0].'/update/schedule/'.$cus->cus_idx,'Schedule')?></li>
	<li<?php echo ($action == 'hasjung')?' class="active"':'' ?>><?php echo anchor($module[0].'/update/hasjung/'.$cus->cus_idx,'Hasil Kunjungan')?></li>
	-->
    </ul>
    <div class="tab-content">
	<?php echo form_open(uri_string(),array('id'=>'formid', 'class'=>'form-horizontal'))?>
	<?php echo view_errors();?>
	    <div class="page-header">
		 <h2>List Customer</h2>
	    </div>
	    
	     <table class="table sortable">
	       <thead>
		 <tr>
		   <th width="10%">Jenis Paket</th>
		   <th width="15%">Tipe Paket</th>
		   <th width="15%">Model Paket</th>
		   <th width="15%">Tgl Koneksi</th>
		   <th width="10%">Tgl Terima Paket</th>
		   <th width="10%">Tgl Due Date</th>
		 </tr>
	       </thead>
	       <tbody>
	       <?php if ($data):?>
		 <?php foreach ($data as $item):?>
		 <tr>
		   <td><?php echo anchor($this->module[0] . '/update/detail/' . $item->cus_idx, $item->pkt_jenis)?></td>
		   <td><?php echo $item->pkt_tipe?></td>
		   <td><?php echo $item->pkt_status ?></td>
		   <td><?php echo $item->pkt_tanggal_koneksi ?></td>
		   <td><?php echo $item->pkt_tanggal_terima ?></td>
		   <td><?php echo $item->pkt_jatuh_tempo ?></td>
		 </tr>
		 <?php endforeach;?>
	       <?php endif;?>
	       </tbody>
	     </table>
	<?php echo form_close();?>
    </div>
</div>