<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{

    protected $table = 'slide';

    protected $fillable = [
        'Title',
        'Image',
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
