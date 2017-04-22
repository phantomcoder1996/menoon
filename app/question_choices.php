<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class question_choices extends Model
{
    //
    public $primaryKey=array('q_id','q_choice_char');
}
