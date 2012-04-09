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
    		}
	);
        
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
</script>
<div class="page-header">
    <h2>Add New Paket</h2>
</div>
<?php echo form_open(uri_string(),array('id'=>'formid', 'class'=>'form-horizontal'))?>
    <?php echo form_hidden('cus_idx','', 'id=cus_idx');?>    
    <?php echo form_text('Corporate ID *','cus_corporate_id',(isset($data->cus_corporate_id))?$data->cus_corporate_id:'','class="span2" maxlength="10" id="pkt_corporate_id"');?>
    <?php echo form_text('Name Perusahaan*','cus_nama_perusahaan',(isset($data->cus_nama_perusahaan))?$data->cus_nama_perusahaan:'','class="span2" maxlength="64" id="cus_nama_perusahaan"');?>
    <?php echo form_area('Contact Person *','cus_cp',(isset($data->cus_cp))?$data->cus_cp:'','class="span3" maxlength="64" id="cus_cp"');?>
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
    <?php echo form_text('Tgl Koneksi*','pkt_tanggal_koneksi',(isset($data->pkt_tanggal_koneksi))?$data->pkt_tanggal_koneksi:'','class="span2" maxlength="15" id="pkt_tanggal_koneksi"');?>    
    <?php echo form_text('Tgl Terima Paket*','pkt_tanggal_terima',(isset($data->pkt_tanggal_terima))?$data->pkt_tanggal_terima:'','class="span2" maxlength="15" id="pkt_tanggal_terima"');?>    
    <?php echo form_text('Tgl Due Date*','pkt_jatuh_tempo',(isset($data->pkt_jatuh_tempo))?$data->pkt_jatuh_tempo:'','class="span2" maxlength="15" id="pkt_jatuh_tempo"');?>    

    <p><code>Note: </code> &nbsp; All field mark with <code>*</code> are required.</p>
    <div class="form-actions">
        <?php echo form_submit('save','Save Data', 'class="btn btn-primary"')?>
        <?php echo anchor($module[0],'Cancel', 'class="btn"')?>
        <?php if(isset($data->pkt_idx)): ?><div class="pull-right"><?php echo anchor($module[0].'/delete/'.$data->pkt_idx,'Delete Paket', 'class="btn btn-danger"')?></div><?php endif; ?>
    </div>
<?php echo form_close();?>