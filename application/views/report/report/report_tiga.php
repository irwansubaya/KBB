<form class="well form-search" style="text-align:left" name="search">
    <table>
        <tr>
            <td>Corporate ID </td>
            <td>Nama Perusahaan</td>
            <td>Tgl Input</td>
            <td>Tgl Koneksi</td>
        </tr>
        <tr>
            <td><input autocomplete="off" type="text" name="cus_corporate_id" id="cus_corporate_id" class="input-small "  value="<?php echo @$param['cus_corporate_id'] ?>"></td>
            <td><input autocomplete="off"  type="text" name="cus_nama_perusahaan" id="cus_nama_perusahaan" class="input-small " value="<?php echo @$param['cus_nama_perusahaan'] ?>"></td>
            <td><input autocomplete="off" type="text" name="cus_tanggal_input" id="cus_input_date" class="input-small" value="<?php echo @$param['cus_tanggal_input'] ?>"></td>
            <td><input autocomplete="off" type="text" name="pkt_tanggal_koneksi" id="pkt_tgl_koneksi" class="input-small" value="<?php echo @$param['pkt_tanggal_koneksi'] ?>"></td>
            <td><button type="submit" class="btn"><i class="icon-search"></i>Search</button></td>            
            <td><?php echo anchor($this->module[0] . '/customer/update/','Clear', 'class="btn"')?></td>

        </tr>
    </table>
</form>
<?php
    echo anchor(base_url(). 'report/report_tiga/pdf', 'Cetak')
?>