<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChildCate extends Model
{
    protected $fillable = ['child_cates'];
	
	return $this->belongsTo('App\Category','foreign_key','cateParen_id);
}
