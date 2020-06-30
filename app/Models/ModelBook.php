<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
class ModelBook extends Model
{ 
    protected $table = 'book';
    protected $fillable = ['titulo','id_user','pages','price'];
    public function relUsers()
    {
        return $this->hasOne(   'App\User',  'id', 'id_user');
    }
}
