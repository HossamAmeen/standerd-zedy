<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'name','en_name','image', "user_id"
     ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
