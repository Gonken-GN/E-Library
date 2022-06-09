<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    
    use HasFactory;
    protected $guarded = [];
    public function koleksis(){
        return $this->belongsToMany('App\Models\koleksi')->withTimestamps();
    }
    public function sirkulasis(){
        return $this->hasMany('App\Models\sirkulasi');
    }
    public function pengembalians(){
        return $this->hasMany('App\Models\pengembalian');
    }
}
