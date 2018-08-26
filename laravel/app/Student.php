<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $primaryKey = 'cadastro_inep';

    public $incrementing = false;

    protected $guarded = [];

    public function turma_atual(){
        return $this->belongsTo('App\Classroom','turma_atual');
    }

    public function turmas_antigas(){
        return $this->belongsToMany('App\Classroom','classrooms_students');
    }
}
