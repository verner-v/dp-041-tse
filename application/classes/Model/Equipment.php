<?php defined('SYSPATH') or die('No direct script access.');

class Model_Equipment extends Model
{	
	
	protected $_db;
	
	public function   __construct()
	{
		$this->_db = Database::instance('default');
	}
		
	/**
	 * Получить всех брендов
	 * @return unknown
	 */
	public function getAllBrand()
	{
	
		$sql = "SELECT * FROM `EQ_BRAND`";
	
		$result = $this->_db->query(Database::SELECT, $sql)->as_array();
	
		return $result;
	
	}
	
	/**
	 * Получить всех брендов с типом оборудования
	 */
	public function getAllBrandWithType()
	{
		$sql = "SELECT * FROM `EQ_BRAND` b, `EQ_TYPE` t WHERE b.`ID_TYPE` = t.`ID`";
		
		$result = $this->_db->query(Database::SELECT, $sql)->as_array();
		
		return $result;
	}
	
	
	/**
	 * Получить всех брендов с типом оборудования
	 */
	public function getAllBrandByIdType($id_type)
	{
		$sql = "SELECT * FROM `EQ_BRAND` b WHERE b.`ID_TYPE` = :param_id_type";
		
		$query = DB::query(Database::SELECT, $sql);
		
		$query->param(':param_id_type', $id_type);
		
		$result = $query->execute($this->_db)->as_array();

		return $result;
		
	}
	
	/**
	 * Получить всех брендов с типом оборудования
	 */
	public function getAllType()
	{
		$sql = "SELECT * FROM `EQ_TYPE`";
		
		$result = $this->_db->query(Database::SELECT, $sql)->as_array();
	
		return $result;
	}
	
	public function addBrand($id_type,$name)
	{
		$sql = "INSERT INTO `EQ_BRAND` (`ID_TYPE`,`NAME`) values (:param_id_type,:param_name)";
		
		$query = DB::query(Database::INSERT, $sql);
		
		$query->param(':param_id_type', $id_type);
		$query->param(':param_name', $name);
		
		$result = $query->execute($this->_db);
	}
	
	
	
	
	public function addType($name)
	{
		
	}
	
	public function addModel($name, $id_brand)
	{
		
	}
	

}