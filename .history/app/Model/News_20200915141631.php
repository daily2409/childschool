<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public $timestamps = true;
    protected $table = 'news';
    public static function addNews($data){

		$Product = new News();

		foreach($data as $k=>$v){
			$Product[$k] = $v;
			if($k == 'category'){
				$Product[$k] = new \MongoDB\BSON\ObjectID($v);
			}
			if($k == 'expire'){
				$Product[$k] = new \MongoDB\BSON\UTCDateTime(new \DateTime($v));
			}
		}


		// $Product['category'] = new \MongoDB\BSON\ObjectID($Product['category']);

		return $Product->save();
	}


}
