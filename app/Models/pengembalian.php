<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class pengembalian extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function member(){
        return $this->belongsTo('App\Models\member');
    }
    public function koleksi() : BelongsTo
    {
        return $this->belongsTo('App\Models\koleksi');
    }
    public function sirkulasi(){
        return $this->belongsTo('App\Models\sirkulasi');
    }
}
