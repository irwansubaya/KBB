<?php
$nav = array (
	'admin'		=> array    (
                                    'Admin'=>array(
					'Add New::admin/insert::',
					'List Admin::admin/::admin/update'
                                    ),
                                    'Engineer'=>array(
                                        'Add New::engineer/insert::',
					'List Engineer::engineer/::engineer/update',
                                    ),
                                     'Kodepos'=>array(
                                        'Add New::kodepos/insert::',
					'List Kodepos::kodepos/::kodepos/update',
                                    ),
                                    'Kode Cabang'=>array(
                                        'Add New::kodecabang/insert::',
					'List Cabang::kodecabang/::kodecabang/update',
                                    ),
                                    'Bidang Usaha'=>array(
                                        'Add New::bidus/insert::',
					'List Bidang Usaha::bidus/::bidus/update',
                                    )),
                                    
        'customer'	=> array    (
                                    'Customer'=>array(
					'Add New::customer/insert::',
					'List::customer/::customer/update',
                                        //'List Schedule::schedule/::schedule/update',
                                    //),
                                    //'Paket'=>array(
                                        //'Add New::paket/insert::',
					//'List Paket::paket/::paket/update',
                                        //'List Customer::customer/::customer/update',
                                    )),
        'schedule'	=> array (
                                    'Schedule'=>array(
					//'Add New ::schedule/insert::',
					'List Schedule::schedule/::schedule/update',
                                    )),
        'report'	=> array (
                                    'report'=>array(
					'Report::report/report::',
					//'Report Next::report/report_next',
                                        //'Report H+3::report/report_tiga',
                                    ))
        
	);