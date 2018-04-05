<?php

namespace larabook;

//use Illuminate\Database\Eloquent\Model;
//Model with validation
use \Esensi\Model\Model;

class Topic extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'topics';
    protected $fillable = ['topicname','created_at','updated_at'];
    //validator rules
    protected $rules =
            ['topicname'=>['required','max:100','unique']];
}
