<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    use HasFactory;

    protected $garded = array('id');

    public static $rules = [
        'person_id' => 'required',
        'title' => 'required',
        'message'=> 'required'
    ];

    public function getDate(){
        return  $this->id . ': ' . $this->title;
    }
}
