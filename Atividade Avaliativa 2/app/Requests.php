<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requests extends Model
{
	protected $fillable = [ 'user_id' , 'subject_id' , 'description' , 'date' ];


	public function subject() {
		return $this->belongsTo('App\Subject');
	}

	public function user() {
		return $this->belongsTo('App\User');
	}
}
