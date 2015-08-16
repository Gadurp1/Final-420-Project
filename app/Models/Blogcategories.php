<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class blogcategories extends Sximo  {
	
	protected $table = 'tb_blogcategories';
	protected $primaryKey = 'CatID';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_blogcategories.* FROM tb_blogcategories  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_blogcategories.CatID IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
