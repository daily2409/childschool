<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{

    protected $table = 'news';

    protected $fillable = [
        'name',
        'slug',
        'content',
        'summary_content',
        'status',
        'image',
        'alt'
    ];
    // protected $primarykey = "id";
    public $timestamps = true;
    public static function addNews($data){

		$News = new News();

		foreach($data as $k=>$v){
			$Product[$k] = $v;
		}

		return $News->save();
	}


}
