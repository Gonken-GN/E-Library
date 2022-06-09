<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class koleksi extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function bibliografi(){
        return $this->belongsTo('App\Models\bibliografi');
    }
    public function members(){
        return $this->belongsToMany('App\Models\member')->withTimestamps();
    }
}
