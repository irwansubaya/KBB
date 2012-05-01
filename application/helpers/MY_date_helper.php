<?php defined('BASEPATH') or exit('No direct script access');

function convert_date($str)
{
	return date('y-m-d', strtotime($str));
}
/* end of file application/helpers/MY_date_helper.php */