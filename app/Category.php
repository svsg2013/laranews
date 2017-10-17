<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['categories'];
	
	return $this->hasOne('App\ChildCate','foreign_key','cateParen_id');
}
