<?php
namespace App\Controllers;

Class Blog extends BaseController{

	public function page(){
		$data =[
			'page_title' =>'Codeigniter 4',
			'page_content' =>'Welcome to Codeigniter 4',
			'subjects' =>['HTML','JAVA','PHP','DRUPAL','LARAVEL','SHOPIFY','WORDPRESS','MEGENTO','BIG-COMMERCE']
		];
		return view('page/blog', $data);
	}
}