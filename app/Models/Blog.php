<?php namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class blog extends Sximo  {
	
	protected $table = 'tb_blogs';
	protected $primaryKey = 'blogID';

	public function __construct() {
		parent::__construct();
		
	}

	public static function querySelect(  ){
		
		return "  SELECT tb_blogs.* FROM tb_blogs  ";
	}	

	public static function queryWhere(  ){
		
		return "  WHERE tb_blogs.blogID IS NOT NULL ";
	}
	
	public static function queryGroup(){
		return "  ";
	}
	

}
