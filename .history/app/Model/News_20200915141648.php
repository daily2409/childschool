<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    public $timestamps = true;
    protected $table = 'news';
    public static function addNews($data){

		$News = new News();

		foreach($data as $k=>$v){
			$Product[$k] = $v;
		}

		return $News->save();
	}


}
