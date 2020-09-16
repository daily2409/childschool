<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{

    protected $table = 'news';
    public $timestamps = true;
    protected $fillable = [
        '_id',
        'code',
        'name',
        'price',
        'price_min',
        'price_max',
        'vote',
        'people',
        'type',
        'expire',
        'status',
        'title',
        'category',
        'image',
        'description',
        'user'
    ];
    public static function addNews($data){

		$News = new News();

		foreach($data as $k=>$v){
			$Product[$k] = $v;
		}

		return $News->save();
	}


}
