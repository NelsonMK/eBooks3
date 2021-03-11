<?php 

class Model_products extends MY_Model
{

	public $_table = 'products';
    public $_primary_keys = array('id');

	public function __construct()
	{
		parent::__construct();
	}

}