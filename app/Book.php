<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['name','price','is_active'];
    public function bookLog(){
    	return $this->hasMany(BookLog::class);
    }
}
