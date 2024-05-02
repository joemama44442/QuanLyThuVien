<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class itemvt extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function vatTu()
    {
        return $this->belongsTo(vatTu::class);
    }
}
