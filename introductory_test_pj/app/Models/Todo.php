<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;
    protected $fillable = ['content','created_at','updated_at'];


     public static $rules = array( 
        'content' => 'required|max:20', 
    );

     public function getDetail() 
    { 
        $txt = 'ID:'.$this->id . ' ' . $this->content . ' '.$this->created_at.' '.$this->updated_at; 
        return $txt; 
    } 
}

