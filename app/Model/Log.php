<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    protected $table = 'log';
    public $timestamps = true;
    public static function insertLog($user_id, $action, $comment){
        $log = new Log();
        $log->user_id = $user_id;
        $log->action = $action;
        $log->comment = $comment;
        $log->save();
        return $log;
    }
}
