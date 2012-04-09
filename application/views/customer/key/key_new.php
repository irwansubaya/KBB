<script src="<?php echo base_url()?>static/js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#formid").validate();
        $( "#tgl" ).datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'yy-mm-dd',
	});
        $('#cus_corporate_id').autocomplete('<?php echo base_url()?>customer/paket/customer_ajax',{
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
			$('#cus_idx').val(data.cus_idx);
	    		$('#cus_corporate_id').val(data.cus_corporate_id);
    		}
	);
        
    });
</script>
<div class="page-header">
    <h2>Add New Key BCA</h2>
</div>
<?php echo form_open(uri_string(),array('id'=>'formid', 'class'=>'form-horizontal'))?>
    <?php echo form_hidden('ckey_idx',(isset($data->cus_idx))?$data->key_idx:'', 'id=key_idx');?>    
    <?php echo form_text('Corporate ID *','pkt_jenis',(isset($data->cus_corporate_id))?$data->cus_corporate_id:'','class="span2" maxlength="10" id="cus_corporate_id"');?>
    <?php echo form_text('Name Perusahaan*','cus_nama_perusahaan',(isset($data->cus_nama_perusahaan))?$data->cus_nama_perusahaan:'','class="span3" maxlength="64"');?>
    <?php echo form_area('Contact Person *','cus_cp',(isset($data->cus_cp))?$data->cus_cp:'','class="span3" maxlength="64"');?>
    <?php echo form_drop('Jenis Paket *','pkt_jenis',array('single_otorisasi'=>'Single Otorisasi','multi_otorisasi'=>'Multi Otorisasi'),(isset($data->pkt_jenis))?$data->pkt_jenis:'','class="span2"');?>
    <?php echo form_drop('Tipe Paket *','pkt_tipe',array('gold'=>'Gold','gold_payroll'=>'Gold Payroll','platinum'=>'Platinum'),(isset($data->pkt_tipe))?$data->pkt_tipe:'','class="span2"');?>
    <?php echo form_drop('Fitur Paket *','pkt_fitur',array(
                                                           'va'=>'Virtual Account',
                                                           'bca_va'=>'BCA Virtual Account',
                                                           'payroll'=>'Payroll',
                                                           'b2b_pertamina'=>'B2B Pertamina',
                                                           'b2b_ecommerce'=>'B2B E-Commerce',
                                                           'mar'=>'MAR',
                                                           'sysadmin'=>'Sysadmin',
                                                           ),(isset($data->pkt_fitur))?$data->pkt_fitur:'','class="span2"');?>
    <?php echo form_drop('Jumlah Key BCA*','pkt_jumlah_key',array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10','11'=>'11','12'=>'12','13'=>'13','14'=>'14','15'=>'15','16'=>'16','17'=>'17','18'=>'18','19'=>'19','20'=>'20'
                                                                  ),(isset($data->pkt_jumlah_key))?$data->pkt_jumlah_key:'','class="span1"');?>
    <?php echo form_text('Tgl Koneksi*','pkt_tanggal_koneksi',(isset($data->pkt_tanggal_koneksi))?$data->pkt_tanggal_koneksi:'','class="span2" maxlength="15" id="tgl"');?>    
    <?php echo form_text('Tgl Terima Paket*','pkt_tanggal_terima',(isset($data->pkt_tanggal_terima))?$data->pkt_tanggal_terima:'','class="span2" maxlength="15" id="tgl"');?>    
    <?php echo form_text('Tgl Due Date*','pkt_jatuh_tempo',(isset($data->pkt_jatuh_tempo))?$data->pkt_jatuh_tempo:'','class="span2" maxlength="15" id="tgl"');?>    
    <p><code>Note: </code> &nbsp; All field mark with <code>*</code> are required.</p>
    <div class="form-actions">
        <?php echo form_submit('save','Save data', 'class="btn btn-primary"')?>
        <?php echo anchor($module[0],'Cancel', 'class="btn"')?>
        <?php if(isset($data->cus_idx)): ?><div class="pull-right"><?php echo anchor($module[0].'/delete/'.$data->cus_idx,'Delete Customer', 'class="btn btn-danger"')?></div><?php endif; ?>
    </div>
<?php echo form_close();?>