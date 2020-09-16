<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{

    protected $table = 'news';
    public $timestamps = true;
    protected $fillable = [
        'name',
        'slug',
        'content',
        'summary_content',
        'status',
        'image',
        'alt'
    ];
    public static function addNews($data){

		$News = new News();

		foreach($data as $k=>$v){
			$Product[$k] = $v;
		}

		return $News->save();
	}


}
