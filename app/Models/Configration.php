<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Configration extends Model
{
    protected $fillable = ['title' ,'en_title', 'email' ,'home_description','en_home_description', 'address' ,'en_address','description', 'en_description',
                             'descriptionPoint' , 'phone' ,'whatsapp',  'phone2' ,'video','video2','youtube',
                             'facebook' ,'behance', 'video' , 'twitter' ,'instagram' ];
}
