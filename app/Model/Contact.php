<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact';
    public $timestamps = false;
    public static function addContact($data){

		$Contact = new Contact();

		foreach($data as $k=>$v){
			$Contact[$k] = $v;
		}

		return $Contact->save();
	}
}