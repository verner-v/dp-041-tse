<?php defined('SYSPATH') or die('No direct script access.');

class Model_Fiscal_Basemodel extends Model
{	
	
	protected $_db;
	
	public function   __construct()
	{
		$this->_db = Database::instance('asuzf');
	}
}