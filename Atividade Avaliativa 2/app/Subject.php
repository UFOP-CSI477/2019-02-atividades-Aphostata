<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
   // Lista dos campos que podem ser gravados com o mass assignment
	protected $fillable = ['name', 'price' ];
  // $guarded - campos que não pode ser atualizados
	public function admin() {
		return $this->belongsTo('App\Admin');
	}
}
