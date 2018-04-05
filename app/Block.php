<?php

namespace larabook;

//use Illuminate\Database\Eloquent\Model;
use \Esensi\Model\Model;

class Block extends Model
{
    protected $primaryKey='id';
    protected $table='blocks';
    protected $fillable=array('title','topicid','content','imagepath','created_at','updated_at');
    
    protected $rules=[
        'title'=>['required','max:100'],
        'topicid'=>['required'],
        'content'=>['required']
        ];
}
