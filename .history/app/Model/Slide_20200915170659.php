<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{

    protected $table = 'slide';

    protected $fillable = [
        'link_image',
        'url',
        'Link',
        'status'
    ];
    // protected $primarykey = "id";
    // public $timestamps = true;
    public static function addSlide($data){

		$Slide = new Slide();

		foreach($data as $k=>$v){
			$Slide[$k] = $v;
		}

		return $Slide->save();
	}


}
