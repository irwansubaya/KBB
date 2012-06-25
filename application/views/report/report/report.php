<script src="<?php echo base_url()?>static/js/jquery.validate.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
        $("#formid").validate();
	$("#pkt_tanggal_terima").datepicker({
		    changeMonth: true,
		    changeYear: true,
		    dateFormat: 'dd-M-yy',
		    minDate: '-2m',
                    maxDate:'+2m',
		    showAnim: 'fold'
	});
    });
</script>

<form class="well form-search" style="text-align:left" name="search">
    <table>
        <tr>
            <!--<td>Schedule Date</td>-->
        </tr>
        <tr>
        <?php 
              //echo date("y-m-d",strtotime("+72 hours"))
        ?>
            <!--<td><input autocomplete="off" type="text" name="sched_date" id="sched_date" class="input-small" value="<?php //echo @$param['sched_date'] ?>"></td>-->
            <td><?php echo anchor(base_url(). 'report/report/pdf', 'Report Harian','class="btn span2"')?></td>
        </tr>
        <tr>
            <td><?php echo anchor(base_url(). 'report/report_next/pdf', 'Report Next','class="btn span2"')?></td>
        </tr>
        <tr>
            <!--<td><?php //echo anchor(base_url(). 'report/report_tiga/pdf', 'Report H+3','class="btn span2"')?></td>-->
            <td><button type="submit" class="btn span2">Report H+3</td>
            <td><input  autocomplete="off" type="text" name="pkt_tanggal_terima" id="pkt_tanggal_terima" class="input-small" value="<?php echo @$param['pkt_tanggal_terima'] ?>"></td>
        </tr>
        <tr>    
            <td><?php echo anchor(base_url(). 'report/report_invoice/pdf', 'Report Invoice','class="btn span2"')?></td>
        </tr>
    </table>
</form>
