<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{

    protected $table = 'blog';

    protected $fillable = [
        'Title',
        'Description',
        'Image',
        'summary_content',
        'status',
        'image',
        'alt'
    ];
    // protected $primarykey = "id";
    // public $timestamps = true;
    public static function addBlog($data){

		$Blog = new Blog();

		foreach($data as $k=>$v){
			$Blog[$k] = $v;
		}

		return $Blog->save();
	}


}
