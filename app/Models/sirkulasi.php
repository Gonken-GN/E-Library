<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class sirkulasi extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function member() : BelongsTo
    {
        return $this->belongsTo('App\Models\member');
    }
    public function koleksi() : BelongsTo
    {
        return $this->belongsTo('App\Models\koleksi');
    }
    public function pengembalians(){
        return $this->hasMany('App\Models\pengembalian');
    }
}
