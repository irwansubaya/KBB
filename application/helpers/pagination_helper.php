<?php defined('BASEPATH') OR exit('No direct script access allowed.');

/**
 * The Pagination helper cuts out some of the bumf of normal pagination
 * 
 * @author	Philip Sturgeon
 * @filename	pagination_helper.php
 * @title	Pagination Helper
 * @version	1.0
 **/

function create_pagination($data)
{
	$ci = & get_instance();
	$ci->load->library('pagination');

	$config['base_url']			= $data['uri'];
	$config['total_rows']		= $data['total_rows']; 
	$config['per_page']			= @$data['limit'] ? @$data['limit'] : 25;
	$config['uri_segment']		= @$data['uri_segment'];
	$config['page_query_string']= @$data['query'];
	$config['use_page_numbers']	= TRUE;
	$config['query_string_segment'] = 'page';

	$config['num_links'] 		= 2;

	$config['full_tag_open'] 	= '<div class="pagination"><ul>';
	$config['full_tag_close'] 	= '</ul></div>';

	$config['first_link'] 		= '&lt;&lt;';
	$config['first_tag_open'] 	= '<li class="first">';
	$config['first_tag_close'] 	= '</li>';
	
	$config['prev_link'] 		= '&larr; Previous';
	$config['prev_tag_open'] 	= '<li class="prev">';
	$config['prev_tag_close'] 	= '</li>';

	$config['cur_tag_open'] 	= '<li class="active"><a href="">';
	$config['cur_tag_close'] 	= '</a></li>';

	$config['num_tag_open'] 	= '<li>';
	$config['num_tag_close'] 	= '</li>';

	$config['next_link'] 		= 'Next &rarr;';
	$config['next_tag_open'] 	= '<li class="next">';
	$config['next_tag_close'] 	= '</li>';

	$config['last_link'] 		= '&gt;&gt;';
	$config['last_tag_open'] 	= '<li class="last">';
	$config['last_tag_close'] 	= '</li>';

	$ci->pagination->initialize($config); // initialize pagination

	return array(
		'per_page' 	=> $config['per_page'],
		'links' 	=> $ci->pagination->create_links(TRUE)
	);
}