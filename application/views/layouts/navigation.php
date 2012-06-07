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
                                    )),
        'customer'	=> array    (
                                    'Customer'=>array(
					'Add New::customer/insert::',
					'List Customer::customer/::customer/update',
                                        'List Schedule::schedule/::schedule/update',
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
        'Paketz'	=> array (
                                    'Paketz'=>array(
					'Add New::Paketz/insert::',
					'List::Paketz/::Paketz/update',
                                    ))
        
	);