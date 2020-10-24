<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name','job','en_name','en_job','image', "user_id"
     ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
