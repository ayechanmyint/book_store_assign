<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BookLog extends Model
{
    //
    protected $fillable = ['book_id','customer_name'];
    public function book(){
    	return $this->belongsToMany(Book::class);
    }
}
