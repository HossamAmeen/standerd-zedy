<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'question' , 'answer','en_question' , 'en_answer' , "user_id"
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
