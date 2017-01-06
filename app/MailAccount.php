<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MailAccount extends Model
{
    public static $PROTOCOL_IMAP = 0;
    public static $PROTOCOL_POP = 1;
    public static $PROTOCOL_EXCHANGE = 2;

    public function user(){
        $this->belongsTo('App\User');
    }
}
