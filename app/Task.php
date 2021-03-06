<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $table = 'tasks';
    protected $fillable= ['content'];
    
    public function user() 
    {
        return $this->belongsTo(User::class);
    }
}
