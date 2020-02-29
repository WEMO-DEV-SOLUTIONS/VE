<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class forumTopic extends Model
{
    protected $fillable = [
        'name',
        'content',
        'user_id',
        'forum_category_id',
        'close'
    ];

    static function rules(){
        return [
            'name'=>'required',
            'content'=>'required',
            'user_id'=>'required',
            'forum_category_id'=>'required',
        ];
    }


    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }

    public function category(){
        return $this->belongsTo(forumCategory::class,'forum_category_id','id');
    }

}
