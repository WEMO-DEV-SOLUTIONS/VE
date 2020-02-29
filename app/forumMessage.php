<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class forumMessage extends Model
{
    protected $fillable = [
        'content',
        'user_id',
        'topic_id',
        'close',
    ];

    static function rules(){
        return [
            'content'=>'required',
            'user_id'=>'required',
        ];
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
}
